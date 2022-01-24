<?php

namespace Prehmis\HL7Bundle\Messages;

use Prehmis\HL7Bundle\Messages\Message;
use Prehmis\HL7Bundle\Messages\AcknowledgeMessage;
use Prehmis\HL7Bundle\Segments\MSA;
use Prehmis\HL7Bundle\Segments\MSH;
use Prehmis\HL7Bundle\Tables\v28\T0076;
use Prehmis\HL7Bundle\Tables\v28\T0354;
use Prehmis\HL7Bundle\Tables\v28\T0008;

class ACK extends AcknowledgeMessage
{
    /**
     * Usage:
     * ```php
     * $ack = new ACK($requestMessage);
     * ```
     *
     * Convenience module implementing an acknowledgement (ACK) message. This can be used in HL7 servers to create an
     * acknowledgement for an incoming message.
     *
     * @param Message|null $req
     * @param MSH|null $msh
     * @param array $options Set control characters or HL7 properties. e.g., ['HL7_VERSION' => '2.5']
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function __construct(Message $req = null, MSH $msh = null, array $options = [])
    {
        parent::__construct(T0076::ACK, null, T0354::ACK, $req, $msh, $options);
    }
}
