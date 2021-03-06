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
     * @param string $operatorCode 營商代碼
     * @param array $requireInputs 必填欄位
     * @return array
     */
    function betlogs(string $operatorCode, array $requireInputs): array;

    /**
     * 小表投注紀錄
     *
     * @param string $operatorCode 營商代碼
     * @param string $vendorCode 遊戲商代碼
     * @param array $requireInputs 必填欄位
     * @param array $extraInputs 額外欄位
     * @param array $rawData 原始資料
     * @param bool $needCreatedAt 產生建立時間
     * @return array
     */
    function betlog(string $operatorCode, string $vendorCode, array $requireInputs, array $extraInputs, array $rawData, bool $needCreatedAt = true): array;

    /**
     * 查詢小表注單
     *
     * @param string $operatorCode
     * @param string $vendorCode
     * @param string $betId
     * @return array
     */
    function queryBetlog(string $operatorCode, string $vendorCode, string $betId, string $searchField = 'bet_id'): array;


    /**
     * 儲存疑慮注單
     *
     * @param string $operatorCode 營商代碼
     * @param string $vendorCode 遊戲商代碼
     * @param array $requireInputs 必填欄位
     * @param array $extraInputs 額外欄位
     * @param array $rawData 原始資料
     * @return array
     */
    function suspectBetlog(string $operatorCode, string $vendorCode, array $requireInputs, array $extraInputs, array $rawData): array;

    /**
     * 儲存紅利注單
     *
     * @param string $operatorCode 營商代碼
     * @param string $vendorCode 遊戲商代碼
     * @param array $requireInputs 必填欄位
     * @param array $extraInputs 額外欄位
     * @param array $rawData 原始資料
     * @return array
     */
    function gameBonusTransLog(string $operatorCode, string $vendorCode, array $requireInputs, array $extraInputs, array $rawData): array;

}

