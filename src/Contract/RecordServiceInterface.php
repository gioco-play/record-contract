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
     * @param mixed $operatorCode 營商代碼
     * @param array $requireInputs 必填欄位
     * @return array
     */
    function betlogs($operatorCode, array $requireInputs): array;

    /**
     * 大表投注紀錄(寫入postgres)
     *
     * @param mixed $operatorCode
     * @param array $requireInputs
     * @return array
     */
    function betlogsToPostgres($operatorCode, array $requireInputs): array;

    /**
     * 大表投注紀錄(多筆寫入postgres)
     *
     * @param mixed $operatorCode
     * @param string $vendorCode
     * @param array $betlogs
     * @return array
     */
    function betlogsToPostgresMultiple($operatorCode, string $vendorCode, array $betlogs): array;

    /**
     * 小表投注紀錄
     *
     * @param mixed $operatorCode 營商代碼
     * @param string $vendorCode 遊戲商代碼
     * @param array $requireInputs 必填欄位
     * @param array $extraInputs 額外欄位
     * @param array $rawData 原始資料
     * @param bool $needCreatedAt 產生建立時間
     * @return array
     */
    function betlog($operatorCode, string $vendorCode, array $requireInputs, array $extraInputs, array $rawData, bool $needCreatedAt = true): array;

    /**
     * 小表投注紀錄（多筆）
     *
     * @param mixed $operatorCode
     * @param string $vendorCode
     * @param array $betlogs
     * @return array
     */
    function betlogMultiple($operatorCode, string $vendorCode, array $betlogs, bool $needCreatedAt = true): array;


    /**
     * 更新小表的createdat
     *
     * @param mixed $operatorCode
     * @param string $vendorCode
     * @param array $betId
     * @return array
     */
    function betlogUpdateCreateAt($operatorCode, string $vendorCode, array $betId): array;

    /**
     * 查詢小表注單
     *
     * @param mixed $operatorCode
     * @param string $vendorCode
     * @param string $betId
     * @return array
     */
    function queryBetlog($operatorCode, string $vendorCode, string $betId, string $searchField = 'bet_id'): array;

    /**
     * 儲存疑慮注單
     *
     * @param mixed $operatorCode 營商代碼
     * @param string $vendorCode 遊戲商代碼
     * @param array $requireInputs 必填欄位
     * @param array $extraInputs 額外欄位
     * @param array $rawData 原始資料
     * @return array
     */
    function suspectBetlog($operatorCode, string $vendorCode, array $requireInputs, array $extraInputs, array $rawData): array;

    /**
     * 儲存紅利注單
     *
     * @param mixed $operatorCode 營商代碼
     * @param string $vendorCode 遊戲商代碼
     * @param array $requireInputs 必填欄位
     * @param array $extraInputs 額外欄位
     * @param array $rawData 原始資料
     * @return array
     */
    function gameBonusTransLog($operatorCode, string $vendorCode, array $requireInputs, array $extraInputs, array $rawData): array;

    function test();
}

