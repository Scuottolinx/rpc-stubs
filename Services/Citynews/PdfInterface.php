<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Citynews/Pdf/Pdf.proto

namespace Services\Citynews;

/**
 * Protobuf type <code>services.citynews.Pdf</code>
 */
interface PdfInterface
{
    /**
     * Method <code>pdfFromUrl</code>
     *
     * @param \Services\Citynews\PdfFromUrlRequest $request
     * @return \Services\Citynews\PdfFromUrlResponse
     */
    public function pdfFromUrl(\Services\Citynews\PdfFromUrlRequest $request);

    /**
     * Method <code>pdfFromHtml</code>
     *
     * @param \Services\Citynews\PdfFromHtmlRequest $request
     * @return \Services\Citynews\PdfFromHtmlResponse
     */
    public function pdfFromHtml(\Services\Citynews\PdfFromHtmlRequest $request);

}
