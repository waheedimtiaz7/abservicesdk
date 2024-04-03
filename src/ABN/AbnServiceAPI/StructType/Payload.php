<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payload StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Payload extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\ExternalRequest|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\ExternalRequest $request = null;
    /**
     * The response
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\Response|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\Response $response = null;
    /**
     * Constructor method for Payload
     * @uses Payload::setRequest()
     * @uses Payload::setResponse()
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequest $request
     * @param \ABN\AbnServiceAPI\StructType\Response $response
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\ExternalRequest $request = null, ?\ABN\AbnServiceAPI\StructType\Response $response = null)
    {
        $this
            ->setRequest($request)
            ->setResponse($response);
    }
    /**
     * Get request value
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequest|null
     */
    public function getRequest(): ?\ABN\AbnServiceAPI\StructType\ExternalRequest
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequest $request
     * @return \ABN\AbnServiceAPI\StructType\Payload
     */
    public function setRequest(?\ABN\AbnServiceAPI\StructType\ExternalRequest $request = null): self
    {
        $this->request = $request;
        
        return $this;
    }
    /**
     * Get response value
     * @return \ABN\AbnServiceAPI\StructType\Response|null
     */
    public function getResponse(): ?\ABN\AbnServiceAPI\StructType\Response
    {
        return $this->response;
    }
    /**
     * Set response value
     * @param \ABN\AbnServiceAPI\StructType\Response $response
     * @return \ABN\AbnServiceAPI\StructType\Payload
     */
    public function setResponse(?\ABN\AbnServiceAPI\StructType\Response $response = null): self
    {
        $this->response = $response;
        
        return $this;
    }
}
