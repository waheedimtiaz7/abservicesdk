<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

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
     * @var \AbnServiceSDK\StructType\ExternalRequest|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequest $request = null;
    /**
     * The response
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\Response|null
     */
    protected ?\AbnServiceSDK\StructType\Response $response = null;
    /**
     * Constructor method for Payload
     * @uses Payload::setRequest()
     * @uses Payload::setResponse()
     * @param \AbnServiceSDK\StructType\ExternalRequest $request
     * @param \AbnServiceSDK\StructType\Response $response
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequest $request = null, ?\AbnServiceSDK\StructType\Response $response = null)
    {
        $this
            ->setRequest($request)
            ->setResponse($response);
    }
    /**
     * Get request value
     * @return \AbnServiceSDK\StructType\ExternalRequest|null
     */
    public function getRequest(): ?\AbnServiceSDK\StructType\ExternalRequest
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \AbnServiceSDK\StructType\ExternalRequest $request
     * @return \AbnServiceSDK\StructType\Payload
     */
    public function setRequest(?\AbnServiceSDK\StructType\ExternalRequest $request = null): self
    {
        $this->request = $request;
        
        return $this;
    }
    /**
     * Get response value
     * @return \AbnServiceSDK\StructType\Response|null
     */
    public function getResponse(): ?\AbnServiceSDK\StructType\Response
    {
        return $this->response;
    }
    /**
     * Set response value
     * @param \AbnServiceSDK\StructType\Response $response
     * @return \AbnServiceSDK\StructType\Payload
     */
    public function setResponse(?\AbnServiceSDK\StructType\Response $response = null): self
    {
        $this->response = $response;
        
        return $this;
    }
}
