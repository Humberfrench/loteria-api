<?php

namespace LoteriaApi\Consumer\Reader;

class HtmlMegasena extends AbstractReaderHtmlLoteria
{
    public function getData()
    {
        $this->numbersNode->setNumberConcurso(0)
            ->setDataConcurso(1)
            ->setDezenasConcurso([2, 3, 4, 5, 6, 7])
            ->setArrecadacaoConcurso(8)
            ->setTotalGanhadoresConcurso(9)
            ->setValorAcumuladoConcurso(16);

        parent::loadData($this->numbersNode);

        return $this->data;
    }
}
