<?php
declare(strict_types=1);
namespace GiocoPlus\Record\Contract;
/**
 * 投注紀錄
 */
interface RecordServiceInterface {

    /**
     * 大表投注紀錄
     *
     * @param string $operatorCode
     * @param array $inputs
     * @return array
     */
    function betlogs(string $operatorCode, array $inputs): array;

}

