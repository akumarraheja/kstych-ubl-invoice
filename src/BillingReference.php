<?php

namespace NumNum\UBL;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class BillingReference implements XmlSerializable
{
    private $invoicedocumentreference;

    /**
     * @return InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference(): InvoiceDocumentReference
    {
        return $this->invoicedocumentreference;
    }

    /**
     * @param InvoiceDocumentReference $invoicedocumentreference
     * @return BillingReference
     */
    public function setInvoiceDocumentReference(InvoiceDocumentReference $invoicedocumentreference): BillingReference
    {
        $this->invoicedocumentreference = $invoicedocumentreference;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        if ($this->invoicedocumentreference !== null) {
            $writer->write([
                Schema::CAC . 'InvoiceDocumentReference' =>  $this->invoicedocumentreference
            ]);
        }
    }
}
