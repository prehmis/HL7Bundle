<?php

namespace Prehmis\HL7Bundle\Messages;

use Prehmis\HL7Bundle\Messages\Message;
use Prehmis\HL7Bundle\Segments\MSA;
use Prehmis\HL7Bundle\Segments\MSH;
use Prehmis\HL7Bundle\Tables\v28\T0076;
use Prehmis\HL7Bundle\Tables\v28\T0008;

class AcknowledgeMessage extends Message
{
    protected $ACK_TYPE;

    /**
     * Usage:
     * ```php
     * $ack = new AcknowledgeMessage($type, $structure, Message $requestMessage);
     * ```
     *
     * Convenience module implementing any acknowledgement message. This can be used in HL7 servers to create an
     * acknowledgement for an incoming message.
     *
     * @param string $type Table 76
     * @param string $structure Table 354
     * @param Message|null $req
     * @param MSH|null $msh
     * @param array $options Set control characters or HL7 properties. e.g., ['HL7_VERSION' => '2.5']
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function __construct(string $type, string $structure, Message $req = null, MSH $msh = null, array $options = [])
    {
        parent::__construct(null, $options);

        if ($req) {
            $originalMsh = $req->getMsh() ?? null;
        }
        
        if(null == $msh) {
            $msh = new MSH(null, $options);
        }
        $msh->setField(MSH::MESSAGE_TYPE, $type);
        $msh->setMessageStructure($structure);
        
        $msa = new MSA(null, $options);
        // Determine acknowledge mode: normal or enhanced
        if (isset($originalMsh) && ($originalMsh->getField(MSH::ACCEPT_ACKNOWLEDGEMENT_TYPE) || $originalMsh->getField(MSH::APPLICATION_ACKNOWLEDGEMENT_TYPE))) {
            $this->ACK_TYPE = 'E';
            $msa->setField(MSA::ACKNOWLEDGEMENT_CODE, T0008::CA);
        }
        else {
            $this->ACK_TYPE = 'N';
            $msa->setField(MSA::ACKNOWLEDGEMENT_CODE, T0008::AA);
        }

        if(isset($originalMsh)) {
//            $msh->setField(MSH::SENDING_APPLICATION, $originalMsh->getReceivingApplication());
//            $msh->setField(MSH::SENDING_FACILITY, $originalMsh->getReceivingFacility());
            $msh->setField(MSH::RECEIVING_APPLICATION, $originalMsh->getSendingApplication());
            $msh->setField(MSH::RECEIVING_FACILITY, $originalMsh->getSendingFacility());
            $msh->setTriggerEvent($originalMsh->getTriggerEvent());

            $msa->setField(MSA::MESSAGE_CONTROL_ID, $originalMsh->getMessageControlId());
        }
        
        $this->addSegment($msh);
        $this->addSegment($msa);
    }

    /**
     * Set the acknowledgement code for the acknowledgement.
     *
     * Code should be one of: A, E, R. Codes can be prepended with C or A, denoting enhanced or normal acknowledge mode.
     * This denotes: accept, general error and reject respectively. The ACK module will determine the right answer mode
     * (normal or enhanced) based upon the request, if not provided. The message provided in $msg will be set in MSA 3.
     *
     * @param string $code Code to use in acknowledgement
     * @param string $msg Acknowledgement message
     * @return boolean
     * @access public
     */
    public function setAckCode(string $code, string $msg = null): ACK
    {
        $mode = 'A';

        // Determine acknowledge mode: normal or enhanced
        //
        if ($this->ACK_TYPE === 'E') {
            $mode = 'C';
        }

        if (\strlen($code) === 1) {
            $code = "$mode$code";
        }

        $msa = $this->getSegmentByIndex(1);
        if (!empty($msa)) {
            $msa->setField(MSA::ACKNOWLEDGEMENT_CODE, $code);
        }
        if ($msg) {
            $msa->setField(MSA::TEXT_MESSAGE, $msg);
        }

        return $this;
    }

    /**
     * Set the error message for acknowledgement.
     *
     * This will also set the error code to either AE or CE, depending on the mode of the incoming message.
     *
     * @param string $msg Error message
     * @access public
     */
    public function setErrorMessage(string $msg): ACK
    {
        $this->setAckCode('E', $msg);
        
        return $this;
    }
}
