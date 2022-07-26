<?php
/********************************************************************************
 *                     .::ALGOL TEAMWORK PRODUCTIONS::.                          *
 *        .::Author © 2021 | algolitc@gmail.com | github.com/algolteam::.        *
 *********************************************************************************
 *  Description: This is class for PHP.                                          *
 *  Thanks to specialist: All PHP masters.                                       *
 ********************************************************************************/

// CONST GLOBAL

use Embed\ExtractorFactory;
use Embed\Http\Crawler;
use Embed\Embed;
use Masterminds\HTML5;
use Josantonius\Request\Request;

const CH_AND = "&";
const CH_COMMA = ",";
const CH_EQUAL = "=";
const CH_FREE = "";
const CH_PLUS = "+";
const CH_MINUS = "-";
const CH_NET = "#";
const CH_NULL = "0";
const CH_NUMBER = "№";
const CH_POINT = ".";
const CH_POINT_TWO_VER = ":";
const CH_POINT_COMMA = ";";
const CH_POINT_THREE = "...";
const CH_SPACE = " ";
const CH_SPEC = "|";
const CH_BOTTOM_LINE = "_";
const CH_BRACE_BEGIN = "(";
const CH_BRACE_END = ")";
const CH_BRACE_FIGURE_BEGIN = "{";
const CH_BRACE_FIGURE_END = "}";
const CH_BRACE_SQR_BEGIN = "[";
const CH_BRACE_SQR_END = "]";
const CH_TAG_BEGIN = "<";
const CH_TAG_END = ">";
const CH_PERCENT = "%";
const CH_MAIL = "@";
const CH_FLAG = "~";
const CH_STAR = "*";
const CH_MONEY = "$";
const CH_INTERJECTION = "!";
const CH_QUESTION = "?";
const CH_ID = "ID";
const CH_OK = "OK";
const CH_NEW_LINE = "\n";
const CH_PATH = "\\";
const CH_ANTI_PATH = "/";

const CH_TRIM = "CH_TRIM";
const CH_AND_TEXT = "AND";
const CH_OR_TEXT = "OR";
const CH_NOT_TEXT = "NOT";

// Const Storage Of Type
const SOT_Dynamic = "SOT_Dynamic";
const SOT_File = "SOT_File";
const SOT_Request = "SOT_Request";
const SOT_Database = "SOT_Database";

/**
 * ALGOL
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class ALGOL {

    /**
     * @var array
     */
    public static $params = [];

    /**
     * @return DefaultOf
     */
    public static function DefaultOf() {
        return new DefaultOf();
    }

    /**
     * @return StrOf
     */
    public static function StrOf() {
        return new StrOf();
    }

    /**
     * @return ValueOf
     */
    public static function ValueOf() {
        return new ValueOf();
    }

    /**
     * @return ArrayOf
     */
    public static function ArrayOf() {
        return new ArrayOf();
    }

    /**
     * @return DateTimeOf
     */
    public static function DateTimeOf() {
        return new DateTimeOf();
    }

    /**
     * @return SystemOf
     */
    public static function SystemOf() {
        return new SystemOf();
    }

    /**
     * @param $AFileName
     * @param null $ALogFile
     * @return LanguageOf
     */
    public static function LanguageOf($AFileName, $ALogFile = null) {
        return new LanguageOf($AFileName, $ALogFile);
    }

    /**
     * @param null $AHost
     * @param null $AUserName
     * @param null $APassword
     * @param null $ADatabase
     * @param int $APort
     * @return MysqlDbOf
     */
    public static function MysqlDbOf($AHost = null, $AUserName = null, $APassword = null, $ADatabase = null, $APort = 3306) {
        return new MysqlDbOf($AHost, $AUserName, $APassword, $ADatabase, $APort);
    }

    /**
     * @param string $AToken
     * @return TelegramOf
     */
    public static function TelegramOf($AToken = "") {
        return new TelegramOf($AToken);
    }

    /**
     * @param $AHost
     * @param $AUserName
     * @param $APassword
     * @param int $APort
     * @param int $ATimeout
     * @return FtpOf
     */
    public static function FtpOf($AHost, $AUserName, $APassword, $APort = 21, $ATimeout = 90) {
        return new FtpOf($AHost, $AUserName, $APassword, $APort, $ATimeout);
    }

    /**
     * @param null $ACrawler
     * @param null $AExtractorFactory
     * @return EmbedOf
     */
    public static function EmbedOf($ACrawler = null, $AExtractorFactory = null) {
        return new EmbedOf($ACrawler, $AExtractorFactory);
    }

    /**
     * @param array|[] $ADefaultOptions
     * @return Html5Of
     */
    public static function Html5Of($ADefaultOptions = []) {
        return new Html5Of($ADefaultOptions);
    }

    /**
     * @param $AType
     * @param $AOptions
     * @return StorageOf
     *
     * <hr>
     * <li><u>SOT_Request</u>: <i>post, get, put, delete request method result.</i></li>
     * <li><u>SOT_Dynamic</u>: <i>session method.</i></li>
     * <li><u>SOT_File</u>: <i>cookie method.</i></li>
     * <li><u>SOT_Database</u>: <i>MySQL bases method.</i></li>
     * <hr>
     * <li><u>host</u>: <i>database host option.</i></li>
     * <li><u>username</u>: <i>database username option.</i></li>
     * <li><u>password</u>: <i>database password option.</i></li>
     * <li><u>database</u>: <i>database name option.</i></li>
     * <li><u>timeout</u>: <i>data clear time option.</i></li>
     * <li><u>security</u>: <i>data security option.</i></li>
     * <li><u>separator</u>: <i>data get path interval option.</i></li>
     *
     */
    public static function StorageOf($AType = SOT_Request, $AOptions = []) {
        return new StorageOf($AType, $AOptions);
    }

    /**
     * @return FakerOf;
     */
    public static function FakerOf() {
        return new FakerOf();
    }

}

// Const Get Type Check
const DTC_Number = "DTC_Number";
const DTC_DateTime = "DTC_DateTime";
const DTC_TimeOnly = "DTC_TimeOnly";
const DTC_MultiArray = "DTC_MultiArray";
const DTC_HTML = "DTC_HTML";

/**
 * DefaultOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class DefaultOf {

    /**
     * Returns the re-check the value
     * <hr>
     * <b>Example:</b>
     * * (null, "hi") - "hi"
     *
     * @param mixed $AValue
     * @param mixed $ADefault error correction value
     * @param null $ATrue
     * @return mixed
     * @link umid_soft@mail.ru
     */
    public function ValueCheck($AValue, $ADefault, $ATrue = null) {
        if (isset($AValue) and (!is_string($AValue) or !empty($AValue))) {
            if (is_null($ATrue)) return $AValue;
            elseif (!is_bool($AValue) or ($AValue === true)) return $ATrue; else return $ADefault;
        } else return $ADefault;
    }

    /**
     * Returns the string value to its original type value
     * <hr>
     * <b>Example:</b>
     * * ("false") - false
     * * ("0012") - 12
     * * ("1.34") - 1.34
     * * (["false", "0012", ["1.34"]]) - [false, 12, [1.34]]
     *
     * @param $AValue
     * @param int $ADecimal
     * @param string $AThousand
     * @return array|bool|float|int|string
     * @link umid_soft@mail.ru
     */
    public function ValueFromString($AValue, $ADecimal = 2, $AThousand = CH_FREE) {
        $FResult = $AValue;
        if (is_object($FResult)) $FResult = (array) $FResult;
        elseif (is_array($FResult)) {
            foreach ($FResult as $FKey => $FValue) {
                if (is_array($FValue)) $FResult[$FKey] = $this->ValueFromString($FValue, $ADecimal, $AThousand); else $FResult[$FKey] = $this->ValueFromStringExecute1($FValue, $ADecimal, $AThousand);
            }
        } else $FResult = $this->ValueFromStringExecute1($FResult, $ADecimal, $AThousand);
        return $FResult;
    }

    /**
     * @param $AValue
     * @param int $ADecimal
     * @param string $AThousand
     * @return bool|float|int|string
     */
    private function ValueFromStringExecute1($AValue, $ADecimal = 2, $AThousand = CH_FREE) {
        if (is_string($AValue)) {
            $FValue = (new StrOf)->Replace($AValue, CH_COMMA, CH_POINT);
            if ($this->TypeCheck($AValue)) return intval($AValue);
            elseif ($this->TypeCheck($AValue, FILTER_VALIDATE_FLOAT)) return (float)number_format(floatval($AValue), (new ArrayOf)->First($ADecimal), (new ArrayOf)->Length($ADecimal) > 1 ? (new ArrayOf)->Value($ADecimal, 2) : CH_POINT, $AThousand);
            elseif ($this->TypeCheck($FValue, FILTER_VALIDATE_FLOAT)) return (float)number_format(floatval($FValue), (new ArrayOf)->First($ADecimal), (new ArrayOf)->Length($ADecimal) > 1 ? (new ArrayOf)->Value($ADecimal, 2) : CH_POINT, $AThousand);
            elseif ((new StrOf)->Same($AValue, "false")) return false;
            elseif ((new StrOf)->Same($AValue, "true")) return true;
            else return $AValue;
        } elseif ($this->TypeCheck($AValue, FILTER_VALIDATE_FLOAT)) return (float)number_format($AValue, (new ArrayOf)->First($ADecimal), (new ArrayOf)->Length($ADecimal) > 1 ? (new ArrayOf)->Value($ADecimal, 2) : CH_POINT, $AThousand); else return $AValue;
    }

    /**
     * Returns the boolean value interval accepted
     * <hr>
     * <b>Example:</b>
     * * (2, 1, 3) - true
     * * (1.1, 0.5, 1.5) - true
     * * ("hi", ["ok", "hi"], null) - true
     * * (2, [1, 2, 5], 3) - true
     * * (3, [1, 2, 5], 3) - false
     * * (1, 2, [1, 2, 5]) - false
     * * ("a", 1, 5) - false
     * * ("2", 1, null) - true
     * * (6, null, 5) - false
     *
     * @param $AValue
     * @param $AMin
     * @param $AMax
     * @return bool
     * @link umid_soft@mail.ru
     */
    public function IntervalCheck($AValue, $AMin, $AMax) {
        $FResult = true;
        $FValue = (new ArrayOf)->First($AValue);
        $FMin = (new ArrayOf)->First($AMin);
        $FMax = (new ArrayOf)->First($AMax);
        if (!is_null($AMin) and !$this->TypeCheck($AMin, DTC_Number)) {
            $FResult = (new StrOf)->Found($AMin, $FValue, 1, SF_SameText);
            $FMin = null;
        }
        if ($FResult and !is_null($AMax) and !$this->TypeCheck($AMax, DTC_Number)) {
            $FResult = (new StrOf)->Found($AMax, $FValue, 1, SF_SameText);
            $FMax = null;
        }
        if ($FResult and ($this->TypeCheck($FMin, DTC_Number) or $this->TypeCheck($FMax, DTC_Number))) {
            if ($this->TypeCheck($FValue, DTC_Number)) {
                if (is_null($FMin)) $FResult = ($FValue <= $FMax);
                elseif (is_null($FMax)) $FResult = ($FMin <= $FValue);
                else $FResult = (($FMin <= $FMax) and ($FMin <= $FValue) and ($FValue <= $FMax));
            } else $FResult = false;
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param int $AType
     * @return bool
     */
    public function TypeCheck($AValue, $AType = FILTER_VALIDATE_INT) {
        if ($AType == DTC_HTML) {
            return ($AValue != strip_tags($AValue)) ? true : false;
        } elseif ($AType == DTC_MultiArray) {
            if (is_array($AValue)) {
                foreach ($AValue as $FValue) if (is_array($FValue)) return true;
            }
            return false;
        } elseif ($AType == DTC_DateTime) {
            if ((new ArrayOf)->Length($AValue) > 1) {
                $FFormats = (new ArrayOf)->Of(AO_Cut, $AValue, 2, (new ArrayOf)->Length($AValue) - 1);
                $FValue = trim((new ArrayOf)->First($AValue));
                if (is_array($FFormats)) {
                    foreach ($FFormats as $FFormat) if (date_parse_from_format($FFormat, $FValue)["error_count"] == 0) return true;
                    return false;
                } else return date_parse_from_format($FFormats, $FValue)["error_count"] == 0;
            } else return date_parse(trim((new ArrayOf)->First($AValue)))["error_count"] == 0;
        } elseif ($AType == DTC_TimeOnly) return $this->TypeCheck([$AValue, "H:i:s", "H:i"], DTC_DateTime); else {
            if ($AType == DTC_Number) $FType = FILTER_VALIDATE_INT|FILTER_VALIDATE_FLOAT; else $FType = $AType;
            if (filter_var($AValue, $FType) === false) return false; else return true;
        }
    }

    /**
     * @param $AValue
     * @param string $ATag
     * @return bool
     */
    public function PrintFormat($AValue, $ATag = 'pre') {
        $FResult = isset($AValue);
        if ($FResult) {
            echo CH_TAG_BEGIN . $ATag . CH_TAG_END;
            print_r($AValue);
            echo CH_TAG_BEGIN . CH_ANTI_PATH . $ATag . CH_TAG_END;
        }
        return $FResult;
    }

}

// Const String Found
const SF_SameText = "SF_SameText";
const SF_FirstText = "SF_FirstText";
const SF_GetCount = "SF_GetCount";
const SF_GetValue = "SF_GetValue";
const SF_GetKey = "SF_GetKey";
const SF_GetKeySame = "SF_GetKeySame";
const SF_OnlyKey = "SF_OnlyKey";
const SF_OnlyKeySame = "SF_OnlyKeySame";
const SF_WithKey = "SF_WithKey";
const SF_WithKeySame = "SF_WithKeySame";

// Const String Replace
const SR_ArrayKeys = "SR_ArrayKeys";
const SR_ReplaceMulti = "SR_ReplaceMulti";

// Const Format From User Data
const SFFUD_FullName = "SFFUD_FullName";
const SFFUD_Login = "SFFUD_Login";
const SFFUD_Password = "SFFUD_Password";

// Const ToSQL Format
const TSF_Normal = "TSF_Normal";
const TSF_One = "TSF_One";
const TSF_JSON = "TSF_JSON";

/**
 * StrOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class StrOf {

    /**
     * @param $AValue
     * @param false $ATrim
     * @return false|int
     */
    public function Length($AValue, $ATrim = false) {
        try {
            if (is_null($AValue)) return 0;
            elseif (is_array($AValue)) return (new ArrayOf)->Length($AValue, true);
            elseif (is_object($AValue)) return (new ArrayOf)->Length((array)$AValue, true);
            elseif ($ATrim) return mb_strlen(trim($AValue), "UTF-8"); else return mb_strlen($AValue, "UTF-8");
        } catch (Exception $e) {
            return 0;
        }
    }

    /**
     * @param $AValue
     * @param $ATrim
     * @return bool
     */
    public function Empty($AValue, $ATrim = true) {
        if (is_array($AValue)) {
            foreach ($AValue as $FValue) {
                if ($this->Empty($FValue, $ATrim)) return true;
            }
            return false;
        } else return $this->Length($AValue, $ATrim) < 1;
    }

    /**
     * @param $AValue
     * @param string $ADefault
     * @return string
     */
    public function From($AValue, $ADefault = CH_FREE) {
        return strval((new DefaultOf)->ValueCheck((new ArrayOf)->First($AValue), $ADefault));
    }

    /**
     * @param $AValue
     * @param $ASubValue
     * @param int $AStart
     * @param bool $ARepeat
     * @param bool $AWord
     * @return false|int
     */
    public function Pos($AValue, $ASubValue, $AStart = 1, $ARepeat = false, $AWord = false) {
        $FResult = 0;
        if (($this->Length($AValue) > 0) and ($this->Length($ASubValue) > 0) and (new DefaultOf)->IntervalCheck($AStart, 1, $this->Length($AValue))) {
            $FResult = $this->PosExecute1($AValue, $ASubValue, $AStart - 1, $AWord);
            if (($FResult == 0) and $ARepeat and ($AStart > 1)) $FResult = $this->PosExecute1($AValue, $ASubValue, 0, $AWord);
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $ASubValue
     * @param int $AStart
     * @param bool $AWord
     * @return false|int
     */
    private function PosExecute1($AValue, $ASubValue, $AStart = 0, $AWord = false) {
        $FResult = mb_stripos($AValue, $ASubValue, $AStart, "UTF-8");
        if ($FResult === false) $FResult = 0; else {
            $FResult += 1;
            if ($AWord) {
                $FStart = $FResult;
                $FFinish = $FResult + $this->Length($ASubValue) - 1;
                $FStartChar = $this->Copy($AValue, $FStart - 1, 1);
                $FFinishChar = $this->Copy($AValue, $FFinish + 1, 1);
                $FPattern = "/^[a-zA-Z\p{Cyrillic}]$/u";
                if ((($FStart > 1) and (bool)preg_match($FPattern, $FStartChar)) or (($FFinish < $this->Length($AValue)) and preg_match($FPattern, $FFinishChar))) $FResult = 0;
                if (($FResult == 0) and ($FFinish < $this->Length($AValue))) $FResult = $this->PosExecute1($AValue, $ASubValue, $FFinish, $AWord);
            }
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $ASubValue
     * @param int $AStart
     * @param bool $ARepeat
     * @return false|int
     */
    public function PosWord($AValue, $ASubValue, $AStart = 1, $ARepeat = false) {
        return $this->Pos($AValue, $ASubValue, $AStart, $ARepeat, true);
    }

    /**
     * @param $AValue
     * @param $ASubValue
     * @param int $AStart
     * @param null $AParam
     * @param bool $AFullSearch
     * @param bool $AWord
     * @param null $APattern
     * @return bool|int
     */
    public function Found($AValue, $ASubValue, $AStart = 1, $AParam = null, $AFullSearch = false, $AWord = false, $APattern = null) {
        $FResult = 0;
        $FText = null;
        if (($this->Length($AValue) > 0) and ($this->Length($ASubValue) > 0)) {
            if (is_null($APattern)) $FSubValue = $ASubValue; else $FSubValue = $this->Replace($APattern, '%s', $ASubValue, SR_ReplaceMulti);
            if ((new ArrayOf)->Length($FSubValue) > 0) {
                $FSubValue = array_diff(array_unique($FSubValue), [CH_FREE]);
                if ($AFullSearch) {
                    foreach ($FSubValue as $FValue) {
                        $FSubResult = 0;
                        $this->FoundExecute1($AValue, $FValue, $AStart, $AParam, $AWord, $FSubResult, $FText);
                        if ($FSubResult == 0) break; else $FResult += $FSubResult;
                    }
                    if (($FResult < (new ArrayOf)->Length($FSubValue)) and ($AParam <> SF_GetCount)) $FResult = 0;
                } else $this->FoundExecute1($AValue, $FSubValue, $AStart, $AParam, $AWord, $FResult, $FText);
            } else $this->FoundExecute1($AValue, $FSubValue, $AStart, $AParam, $AWord, $FResult, $FText);
        }
        if ($AParam == SF_GetCount) return $FResult;
        elseif (in_array($AParam, [SF_GetValue, SF_GetKey, SF_GetKeySame])) return $FText;
        else return $FResult > 0;
    }

    /**
     * @param $ASource
     * @param $ASearch
     * @param $APos
     * @param $AParam
     * @param $AWord
     * @param $AResult
     * @param $AText
     */
    private function FoundExecute1($ASource, $ASearch, $APos, $AParam, $AWord, &$AResult, &$AText) {
        $FSource = $ASource;
        if (is_array($FSource)) {
            if (in_array($AParam, [SF_OnlyKey, SF_OnlyKeySame])) $FSource = array_keys($FSource);
            elseif (in_array($AParam, [SF_WithKey, SF_WithKeySame])) $FSource = array_merge(array_keys($FSource), array_values($FSource));
            foreach ($FSource as $FKey => $FValue) {
                if (is_array($FValue)) $this->FoundExecute1($FValue, $ASearch, $APos, $AParam, $AWord, $AResult, $AText); else $this->FoundExecute2($FValue, $ASearch, $APos, $AParam, $AWord, $AResult);
                if (($AParam <> SF_GetCount) and ($AResult > 0)) {
                    if ($AParam == SF_GetValue) $AText = $FValue;
                    elseif (in_array($AParam, [SF_GetKey, SF_GetKeySame])) $AText = $FKey;
                    break;
                }
            }
        } else {
            $this->FoundExecute2($FSource, $ASearch, $APos, $AParam, $AWord, $AResult);
            if (($AParam == SF_GetValue) and ($AResult > 0)) $AText = $FSource;
        }
    }

    /**
     * @param $ASource
     * @param $ASearch
     * @param $APos
     * @param $AParam
     * @param $AWord
     * @param $AResult
     */
    private function FoundExecute2($ASource, $ASearch, $APos, $AParam, $AWord, &$AResult) {
        if (is_array($ASearch)) {
            foreach ($ASearch as $FValue) {
                if ($AParam == SF_GetCount) $this->FoundExecute3($ASource, $FValue, $APos, $AWord, $AResult); else {
                    if (in_array($AParam, [SF_SameText, SF_OnlyKeySame, SF_WithKeySame, SF_GetKeySame])) $AResult = $this->Same($ASource, $FValue) ? 1 : 0;
                    elseif ($AParam == SF_FirstText) $AResult = ($this->Pos($ASource, $FValue) == 1) ? 1 : 0; else $AResult = ($this->Pos($ASource, $FValue, $APos, false, $AWord) > 0) ? 1 : 0;
                    if ($AResult > 0) break;
                }
            }
        } else {
            if ($AParam == SF_GetCount) $this->FoundExecute3($ASource, $ASearch, $APos, $AWord, $AResult); else {
                if (in_array($AParam, [SF_SameText, SF_OnlyKeySame, SF_WithKeySame, SF_GetKeySame])) $AResult = $this->Same($ASource, $ASearch) ? 1 : 0;
                elseif ($AParam == SF_FirstText) $AResult = ($this->Pos($ASource, $ASearch) == 1) ? 1 : 0; else $AResult = ($this->Pos($ASource, $ASearch, $APos, false, $AWord) > 0) ? 1 : 0;
            }
        }
    }

    /**
     * @param $ASource
     * @param $ASearch
     * @param $APos
     * @param $AWord
     * @param $AResult
     */
    private function FoundExecute3($ASource, $ASearch, $APos, $AWord, &$AResult) {
        if (($this->Length($ASource) > 0) and ($this->Length($ASearch) > 0)) {
            $FSource = $ASource;
            $FLenSearch = $this->Length($ASearch);
            $FPos = $this->Pos($FSource, $ASearch, $APos, false, $AWord);
            while ($FPos > 0) {
                $AResult += 1;
                $FSource = $this->Copy($FSource, $FPos + $FLenSearch, $this->Length($FSource) - $FPos - $FLenSearch + 1);
                $FPos = $this->Pos($FSource, $ASearch, 1, false, $AWord);
            }
        }
    }

    public function FoundWord($AValue, $ASubValue) {
        return $this->Found($AValue, $ASubValue, 1, null, false, true);
    }

    /**
     * @param $AValue1
     * @param $AValue2
     * @param int $APercent
     * @return bool
     */
    public function Same($AValue1, $AValue2, $APercent = 100) {
        similar_text($this->CharCase($AValue1, MB_CASE_LOWER), $this->CharCase($AValue2, MB_CASE_LOWER), $FPercent);
        return ($FPercent >= $APercent);
    }

    /**
     * @param $AValue
     * @param $ANumber
     * @param string $AInterval
     * @return mixed|null
     */
    public function Cut($AValue, $ANumber, $AInterval = CH_SPEC) {
        if ((new ArrayOf)->FromString($AValue, $AInterval, $FResult) > 0) $FResult = (new ArrayOf)->Value($FResult, $ANumber); else $FResult = null;
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $AStart
     * @param $ALength
     * @param false $ARight
     * @param null $AContinueFormat
     * @return string
     */
    public function Copy($AValue, $AStart, $ALength, $ARight = false, $AContinueFormat = null) {
        $FLength = $this->Length($AValue);
        if (($FLength > 0) and (new DefaultOf)->IntervalCheck($AStart, 1, $FLength) and ($ALength > 0)) {
            if ($ARight) $FStart = $AStart * (-1); else $FStart = $AStart - 1;
            if (($FLength > $ALength) and ($this->Length($AContinueFormat) > 0)) {
                $FLength = $ALength - $this->Length($AContinueFormat);
                $FContinueFormat = $AContinueFormat;
            } else {
                $FLength = $ALength;
                $FContinueFormat = CH_FREE;
            }
            return mb_substr($AValue, $FStart, $FLength, "UTF-8") . $FContinueFormat;
        } else return CH_FREE;
    }

    /**
     * @param $AValue
     * @param $ASearch
     * @param $AReplace
     * @param null $AParam
     * @return array|string|null
     */
    public function Replace($AValue, $ASearch, $AReplace, $AParam = null, $APerefix = null) {
        $FSearch = $ASearch;
        $FReplace = $AReplace;
//        if (isset($ASearchPerefix)) {
//            if (is_array($FSearch)) {
//                $FNewSearch = [];
//                if ((new ArrayOf)->Length($FSearch) == (new ArrayOf)->Length($ASearchPerefix)) {
//                    foreach ($FSearch as $FKey => $FValue) {
//                        $FNewSearch[$FKey] = $this->Replace($ASearchPerefix[$FKey], '%s', $FValue);
//                    }
//                } else {
//                    $FPrefix = (new ArrayOf)->First($ASearchPerefix);
//                    foreach ($FSearch as $FKey => $FValue) {
//                        $FNewSearch[$FKey] = $this->Replace($FPrefix, '%s', $FValue);
//                    }
//                }
//                if (!(new ArrayOf)->Empty($FNewSearch)) {
//                    if ((new ArrayOf)->Length($FSearch) == (new ArrayOf)->Length($FReplace)) {
//                        $FReplace = (new ArrayOf)->Of(AO_Merge, $FReplace, $FReplace);
//                    }
//                    $FSearch = (new ArrayOf)->Of(AO_Merge, $FNewSearch, $FSearch);
//                }
//            } elseif (is_array($ASearchPerefix)) {
//                $FNewSearch = [];
//                foreach ($ASearchPerefix as $FKey => $FValue) {
//                    $FNewSearch[$FKey] = $this->Replace($FValue, '%s', $FSearch);
//                }
//                $FSearch = (new ArrayOf)->Of(AO_Merge, $FNewSearch, $FSearch);
//            } else $FSearch = [$this->Replace($ASearchPerefix, '%s', $FSearch), $FSearch];
//        }
        if (($AParam == SR_ArrayKeys) and is_array($AValue)) {
            $FResult = $this->ReplaceExecute4($AValue,  $FSearch, $FReplace);
        } elseif (($AParam == SR_ReplaceMulti) and is_array($FReplace)) {
            $FResult = [];
            foreach ($FReplace as $FReplace) {
                $FResult = (new ArrayOf)->Of(AO_Merge, $FResult, $this->Replace($AValue, $FSearch, $FReplace, null, $APerefix));
            }
            $FResult = array_unique($FResult);
        } elseif (is_string($AValue) and is_null($FReplace)) {
            if (is_array($FSearch)) $FResult = vsprintf($AValue, $FSearch); else $FResult = sprintf($AValue, $FSearch);
        } else {
            $FResult = $AValue;
            if (is_array($FResult)) {
                foreach ($FResult as $FKey => $FValue) {
                    if (is_array($FValue)) {
                        $FReplaceValue = $this->Replace($FValue, $FSearch, $FReplace, null, $APerefix);
                        if (is_null($FReplaceValue)) unset($FResult[$FKey]); else $FResult[$FKey] = $FReplaceValue;
                    } else {
                        $FReplaceValue = $this->ReplaceExecute1($FValue, $FSearch, $FReplace, $APerefix);
                        if (is_null($FReplaceValue)) unset($FResult[$FKey]); else $FResult[$FKey] = $FReplaceValue;
                    }
                }
            } else $FResult = $this->ReplaceExecute1($AValue, $FSearch, $FReplace, $APerefix);
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $ASearch
     * @param $AReplace
     * @return string|null
     */
    private function ReplaceExecute1($AValue, $ASearch, $AReplace, $APerefix) {
        $FResult = $this->From($AValue);
        if (is_array($ASearch)) {
            foreach ($ASearch as $FKey => $FValue) {
                if (is_array($AReplace)) {
                    if (array_key_exists($FKey, $AReplace)) $this->ReplaceExecute2($FValue, $AReplace[$FKey], $FResult, $APerefix);
                } else $this->ReplaceExecute2($FValue, $AReplace, $FResult, $APerefix);
                if (is_null($FResult)) break;
            }
        } else $this->ReplaceExecute2($ASearch, $AReplace, $FResult, $APerefix);
        return $FResult;
    }

    /**
     * @param $ASearch
     * @param $AReplace
     * @param $AResult
     */
    private function ReplaceExecute2($ASearch, $AReplace, &$AResult, $APerefix) {
        $FReplace = (new ArrayOf)->First($AReplace);
        if ($this->Length($ASearch) > 0) {
            if ($ASearch === CH_NEW_LINE) $AResult = preg_replace("/[\n\r]/", $FReplace, $AResult);
            elseif ($ASearch === CH_TRIM) $AResult = trim($AResult); else {
                if (is_null($APerefix) or !$this->ReplaceExecute3($this->Replace($APerefix, '%s', $ASearch), $FReplace, $AResult)) $this->ReplaceExecute3($ASearch, $FReplace, $AResult);
            }
        }
        if (is_null($FReplace) and ($this->Length($AResult) == 0)) $AResult = null;
    }

    /**
     * @param $ASearch
     * @param $AReplace
     * @param $AResult
     */
    private function ReplaceExecute3($ASearch, $AReplace, &$AResult) {
        $FResult = $this->Same($ASearch, $AResult);
        if ($FResult) $AResult = $AReplace; else {
            $FLenSearch = $this->Length($ASearch);
            $FLenReplace = $this->Length($AReplace);
            $FPos = $this->Pos($AResult, $ASearch);
            $FResult = $FPos > 0;
            while ($FPos > 0) {
                $AResult = $this->Copy($AResult, 1, $FPos - 1) . $AReplace . $this->Copy($AResult, $FPos + $FLenSearch, $this->Length($AResult) - $FPos - $FLenSearch + 1);
                $FPos = $this->Pos($AResult, $ASearch, $FPos + $FLenReplace);
            }
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $ASearch
     * @param $AReplace
     * @return array
     */
    private function ReplaceExecute4($AValue, $ASearch, $AReplace) {
        $FResult = $AValue;
        if (is_array($ASearch) and is_array($AReplace)) {
            foreach ($ASearch as $FKey => $FValue) {
                if (!is_array($FValue) and array_key_exists($FValue, $FResult) and array_key_exists($FKey, $AReplace) and ($FValue <> $AReplace[$FKey])) {
                    $FResult[$AReplace[$FKey]] = $FResult[$FValue];
                    unset($FResult[$FValue]);
                }
            }
        } else {
            if (is_null($ASearch)) {
                if (is_array($AReplace)) {
                    foreach ($AReplace as $FKey => $FValue) {
                        if (!is_array($FValue) and ($FKey <> $FValue) and array_key_exists($FKey, $FResult)) {
                            $FResult[$FValue] = $FResult[$FKey];
                            unset($FResult[$FKey]);
                        }
                    }
                } elseif ((new DefaultOf)->TypeCheck($AReplace)) $FResult = array_combine(range($AReplace, $AReplace + (new ArrayOf)->Length($FResult) - 1), array_values($FResult));
            } elseif (!is_array($ASearch) and !is_array($AReplace)) {
                $FKey = $this->From($ASearch);
                $FValue = $this->From($AReplace);
                if (($this->Length($FKey) > 0) and ($this->Length($FValue) > 0) and ($FKey <> $FValue) and array_key_exists($FKey, $FResult)) {
                    $FResult[$FValue] = $FResult[$FKey];
                    unset($FResult[$FKey]);
                }
            }
        }

        foreach ($FResult as $FKey => $FValue) {
            if (is_array($FValue)) $FResult[$FKey] = $this->ReplaceExecute4($FValue, $ASearch, $AReplace);
        }

        return $FResult;
    }

    /**
     * @param $ASource
     * @param $AAppend
     * @param string $ASeparator
     * @param false $AIfExs
     * @param false $AInvert
     * @return array|mixed|string|null
     */
    public function Add($ASource, $AAppend, $ASeparator = ", ", $AIfExs = false, $AInvert = false) {
        if (is_array($AAppend)) {
            $FResult = $ASource;
            foreach ($AAppend as $FValue) $FResult = $this->Add($FResult, $FValue, $ASeparator, $AIfExs, $AInvert);
            return $FResult;
        } elseif ($this->Length($AAppend, true) == 0) return $ASource;
        elseif ($this->Length($ASource, true) == 0) return $AAppend;
        elseif (!$AIfExs or ($this->Pos($ASource, $AAppend) == 0)) {
            if ($AInvert) return ($AAppend . $ASeparator . $ASource); else return ($ASource . $ASeparator . $AAppend);
        } else return $ASource;
    }

    /**
     * @param $AValue
     * @param int $AParam
     * @return string
     */
    public function CharCase($AValue, $AParam = MB_CASE_TITLE) {
        if (is_null($AParam)) return $this->From($AValue); else return mb_convert_case($AValue, $AParam, "UTF-8");
    }

    /**
     * @param $AValue
     * @param string $AParam
     * @param null $AResult
     * @return bool
     */
    public function FormatFromUserData($AValue, $AParam = SFFUD_FullName, &$AResult = null) {
        $AResult = null;
        $FResult = false;
        switch ($AParam) {
            case SFFUD_FullName:
                if (((new ArrayOf)->FromString($AValue, CH_SPACE, $FSubResult) == 2) or ((new ArrayOf)->FromString($AValue, CH_BOTTOM_LINE, $FSubResult) == 2)) {
                    $FPatternLatin = "/^[a-zA-Z'`]{3,15}$/";
                    $FPatternCyril = "/^[\p{Cyrillic}]{3,15}$/u";
                    $FFirstName = trim((new ArrayOf)->Value($FSubResult));
                    $FLastName = trim((new ArrayOf)->Value($FSubResult, 2));
                    if ((preg_match($FPatternLatin, $FFirstName) and preg_match($FPatternLatin, $FLastName)) or (preg_match($FPatternCyril, $FFirstName) and preg_match($FPatternCyril, $FLastName))) {
                        $FFirstName = $this->CharCase($FFirstName);
                        $FLastName = $this->CharCase($FLastName);
                        $AResult = $FFirstName . CH_SPACE . $FLastName;
                        $FResult = true;
                    }
                }
                break;
            case SFFUD_Password:
                $FPatternPassword = "/^[a-zA-Z\p{Cyrillic}0-9]{2,20}$/u";
                if (preg_match($FPatternPassword, $AValue)) {
                    $AResult = $AValue;
                    $FResult = true;
                }
                break;
        }
        return $FResult;
    }

    /**
     * @param $AFileName
     * @param $AValue
     * @param bool $ANewLine
     * @return bool
     */
    public function ToFile($AFileName, $AValue, $ANewLine = false) {
        $FResult = false;
        if (($this->Length($AFileName) > 0) and ($this->Length($AValue) > 0)) {
            try {
                $FFile = fopen($AFileName, 'a+');
                if ($FFile) {
                    if ($ANewLine) fwrite($FFile, CH_NEW_LINE);
                    fwrite($FFile, $AValue);
                    fclose($FFile);
                    $FResult = true;
                }
            }
            catch (Exception $Err) {
                echo "Message: " .$Err->getMessage();
            }
        }
        return $FResult;
    }

    /**
     * Mini-wrapper for running MySQL queries with parameter binding with or without PDO
     * @param $ALink
     * @param $AQuery
     * @return mixed
     */
    public function ToSQL($ALink, $AQuery, $AParam = null, $AFormat = TSF_Normal) {
        $FResult = false;
        if (is_array($AQuery)) {
            if (is_array($AParam)) {
                foreach ($AQuery as $FKey => $FValue) {
                    $FResult = $this->ToSQL($ALink, $FValue, $AParam[$FKey]);
                }
            } else {
                foreach ($AQuery as $FValue) {
                    $FResult = $this->ToSQL($ALink, $FValue, $AParam);
                }
            }
        } else {
            $stmt = mysqli_stmt_init($ALink);
            if ($stmt->prepare($AQuery)) {
                if (!is_null($AParam)) {
                    $bind_types = '';
                    $bind_data = array();
                    foreach ($AParam as $key => $value) {
                        $bind_types .= is_numeric($value) ? 'i' : 's';
                        $bind_data[] = &$AParam[$key];
                    }
                    array_unshift($bind_data, $bind_types);
                    call_user_func_array(array($stmt, 'bind_param'), $bind_data);
                }
                if ($stmt->execute()) {
                    $results = $stmt->get_result();
                    if ($results) {
                        if ($results->num_rows > 0) {
                            if ($AFormat == TSF_One) $FResult = $results->fetch_assoc(); else {
                                $FResult = [];
                                if ($AFormat == TSF_JSON) {
                                    while ($row = $results->fetch_row()) {
                                        $FResult[$row[0]] = (new ArrayOf)->FromJSON($row[1]);
                                    }
                                } else {
                                    while ($row = $results->fetch_assoc()) {
                                        $FResult[] = $row;
                                    }
                                }
                            }
                        }
                    } else $FResult = true;
                    $stmt->close();
                }
            }
        }
        return $FResult;
    }

}

/**
 * ValueOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class ValueOf {

    /**
     * @param $AValue
     * @param int $ASecond
     * @param int $AMinute
     * @param int $AHour
     * @param int $ADay
     * @param int $AWeek
     * @param int $AMonth
     * @param int $AYear
     * @param string $AFormat
     * @return string
     */
    public function DateTimeModify($AValue, $ASecond = 0, $AMinute = 0, $AHour = 0, $ADay = 0, $AWeek = 0, $AMonth = 0, $AYear = 0, $AFormat = "d.m.Y H:i:s") {
        $FValue = date_create($AValue);
        if ($ASecond <> 0) $FValue->modify(sprintf("%d second", $ASecond));
        if ($AMinute <> 0) $FValue->modify(sprintf("%d second", $ASecond * $AMinute));
        if ($AHour <> 0) $FValue->modify(sprintf("%d hour", $AHour));
        if ($ADay <> 0) $FValue->modify(sprintf("%d day", $ADay));
        if ($AWeek <> 0) $FValue->modify(sprintf("%d week", $AWeek));
        if ($AMonth <> 0) $FValue->modify(sprintf("%d month", $AMonth));
        if ($AYear <> 0) $FValue->modify(sprintf("%d year", $AYear));
        return $FValue->format($AFormat);
    }

    /**
     * @param $AStartTime
     * @param $AFinishTime
     * @param string $AFormat
     * @param null $ADefault
     * @return mixed|null
     */
    public function DateTimePeriod($AStartTime, $AFinishTime, $AFormat = "[Seconds]", $ADefault = null) {
        $FResult = $ADefault;
        $FStartTime = $AStartTime;
        $FFinishTime = $AFinishTime;
        if ((new DefaultOf)->TypeCheck($FStartTime, DTC_DateTime) and (new DefaultOf)->TypeCheck($FFinishTime, DTC_DateTime)) {
            if ((new DefaultOf)->TypeCheck($FStartTime, DTC_TimeOnly) and !(new DefaultOf)->TypeCheck($FFinishTime, DTC_TimeOnly)) $FFinishTime = $this->DateTimeConvertFormat($FFinishTime, "H:i:s");
            elseif (!(new DefaultOf)->TypeCheck($FStartTime, DTC_TimeOnly) and (new DefaultOf)->TypeCheck($FFinishTime, DTC_TimeOnly)) $FStartTime = $this->DateTimeConvertFormat($FStartTime, "H:i:s");
            if ((new DefaultOf)->TypeCheck($FStartTime, DTC_TimeOnly) and (new DefaultOf)->TypeCheck($FFinishTime, DTC_TimeOnly) and (strtotime($FStartTime) > strtotime($FFinishTime))) {
                $FStartTime = $this->DateTimeConvertFormat($FStartTime, "01.01.2000 H:i:s");
                $FFinishTime = $this->DateTimeConvertFormat($FFinishTime, "02.01.2000 H:i:s");
            }
            if (strtotime($FStartTime) < strtotime($FFinishTime)) {
                $FStartTime = date_create($FStartTime);
                $FInterval = $FStartTime->diff(date_create($FFinishTime));
                if (is_array($AFormat)) {
                    $FFormat = null;
                    if (!isset($AFormat["Year"])) $AFormat["Year"] = "year";
                    if (!isset($AFormat["Month"])) $AFormat["Month"] = "month";
                    if (!isset($AFormat["Day"])) $AFormat["Day"] = "day";
                    if (!isset($AFormat["Hour"])) $AFormat["Hour"] = "hour";
                    if (!isset($AFormat["Minute"])) $AFormat["Minute"] = "minute";
                    if (!isset($AFormat["Second"])) $AFormat["Second"] = "second";
                    if ($FInterval->y > 0) {
                        $FFormat = "[Year]" . CH_SPACE . $AFormat["Year"];
                        if ($FInterval->m > 0) $FFormat = (new StrOf)->Add($FFormat, "[Month]" . CH_SPACE . $AFormat["Month"]);
                        if ($FInterval->d > 0) $FFormat = (new StrOf)->Add($FFormat, "[Day]" . CH_SPACE . $AFormat["Day"]);
                    } elseif ($FInterval->m > 0) {
                        $FFormat = "[Month]" . CH_SPACE . $AFormat["Month"];
                        if ($FInterval->d > 0) $FFormat = (new StrOf)->Add($FFormat, "[Day]" . CH_SPACE . $AFormat["Day"]);
                        if ($FInterval->h > 0) $FFormat = (new StrOf)->Add($FFormat, "[Hour]" . CH_SPACE . $AFormat["Hour"]);
                    } elseif ($FInterval->d > 0) {
                        $FFormat = "[Day]" . CH_SPACE . $AFormat["Day"];
                        if ($FInterval->h > 0) $FFormat = (new StrOf)->Add($FFormat, "[Hour]" . CH_SPACE . $AFormat["Hour"]);
                        if ($FInterval->i > 0) $FFormat = (new StrOf)->Add($FFormat, "[Minute]" . CH_SPACE . $AFormat["Minute"]);
                    } elseif ($FInterval->h > 0) {
                        $FFormat = "[Hour]" . CH_SPACE . $AFormat["Hour"];
                        if ($FInterval->i > 0) $FFormat = (new StrOf)->Add($FFormat, "[Minute]" . CH_SPACE . $AFormat["Minute"]);
                    } elseif ($FInterval->i > 0) {
                        $FFormat = "[Minute]" . CH_SPACE . $AFormat["Minute"];
                        if ($FInterval->s > 0) $FFormat = (new StrOf)->Add($FFormat, "[Second]" . CH_SPACE . $AFormat["Second"]);
                    } elseif ($FInterval->s > 0) $FFormat = "[Second]" . CH_SPACE . $AFormat["Second"];
                    if (isset($FFormat)) $this->DateTimePeriodExecute1($FInterval, $FFormat, $FResult);
                } else $this->DateTimePeriodExecute1($FInterval, $AFormat, $FResult);
            }
        }
        return $FResult;
    }

    /**
     * @param $AInterval
     * @param $AFormat
     * @param $AResult
     */
    private function DateTimePeriodExecute1($AInterval, $AFormat, &$AResult) {
        $AResult = (new StrOf)->Replace($AFormat,
            ["[Years]", "[Year]",
                "[Months]", "[Month]",
                "[Days]", "[Day]",
                "[Hours]", "[Hour]",
                "[Minutes]", "[Minute]",
                "[Seconds]", "[Second]"],
            [$AInterval->y, $AInterval->y,
                $AInterval->m, $AInterval->m,
                $AInterval->days, $AInterval->d,
                $AInterval->h + $AInterval->days * 24, $AInterval->h,
                $AInterval->i + $AInterval->h * 60 + $AInterval->days * 1440, $AInterval->i,
                $AInterval->s + $AInterval->i * 60 + $AInterval->h * 3600 + $AInterval->days * 86400, $AInterval->s]);
    }

    /**
     * @param $AValue
     * @param $AStartTime
     * @param $AFinishTime
     * @param null $AWeekDay
     * @return bool|int
     */
    public function DateTimeIntervalCheck($AValue, $AStartTime, $AFinishTime, $AWeekDay = null) {
        if (is_null($AStartTime) and is_null($AFinishTime)) return true; else {
            $FTimeStyle = ((new DefaultOf)->TypeCheck($AStartTime, DTC_TimeOnly) or (new DefaultOf)->TypeCheck($AFinishTime, DTC_TimeOnly));
            if ($FTimeStyle) $FValue = $this->DateTimeConvertFormat($AValue, "H:i:s"); else $FValue = $AValue;
            if (is_null($AStartTime)) $FResult = (strtotime($FValue) <= strtotime($AFinishTime));
            elseif (is_null($AFinishTime)) $FResult = (strtotime($AStartTime) <= strtotime($FValue));
            elseif ($FTimeStyle and (strtotime($AStartTime) > strtotime($AFinishTime))) $FResult = ((new DefaultOf)->IntervalCheck(strtotime($FValue), strtotime($AStartTime), strtotime("23:59:59")) or (new DefaultOf)->IntervalCheck(strtotime($FValue), strtotime("00:00:00"), strtotime($AFinishTime)));
            else $FResult = (new DefaultOf)->IntervalCheck(strtotime($FValue), strtotime($AStartTime), strtotime($AFinishTime));
            if ($FResult and !is_null($AWeekDay)) $FResult = (new StrOf)->Pos($AWeekDay, $this->DateTimeConvertFormat($AValue, "N")) > 0;
            return $FResult;
        }
    }

    /**
     * @param $AValue
     * @param string $AFormat
     * @param null $ADefault
     * @return false|string|null
     */
    public function DateTimeConvertFormat($AValue, $AFormat = "d.m.Y H:i:s", $ADefault = null) {
        if ((new DefaultOf)->TypeCheck($AValue, DTC_DateTime)) return date($AFormat, strtotime($AValue)); else return $ADefault;
    }

    /**
     * @param $AMin
     * @param $AMax
     * @return int
     */
    public function Random($AMin, $AMax) {
        if ($AMin <= $AMax) return mt_rand($AMin, $AMax); else return $AMin;
    }

    /**
     * @param $AMin
     * @param $AMax
     * @param int $ADefault
     * @return float|int
     */
    public function Percent($AMin, $AMax, $ADefault = 100) {
        if ($AMax <> 0) return round(($AMin * 100) / $AMax); else return $ADefault;
    }

    /**
     * @param $AValue1
     * @param $AValue2
     */
    public function Swap(&$AValue1, &$AValue2) {
        $FTemp = $AValue1;
        $AValue1 = $AValue2;
        $AValue2 = $FTemp;
    }

    /**
     * @param $ALatFrom
     * @param $ALonFrom
     * @param $ALatTo
     * @param $ALonTo
     * @param string $AUnit
     * @param int $ADecimal
     * @return array|bool|float|int|string
     */
    public function Distance($ALatFrom, $ALonFrom, $ALatTo, $ALonTo, $AUnit = "km", $ADecimal = 1) {
        $FResult = 0;
        if (($ALatFrom <> $ALatTo) or ($ALonFrom <> $ALonTo)) {
            // Get param and calculate
            $FTheta = $ALonFrom - $ALonTo;
            $FDist = sin(deg2rad($ALatFrom)) * sin(deg2rad($ALatTo)) + cos(deg2rad($ALatFrom)) * cos(deg2rad($ALatTo)) * cos(deg2rad($FTheta));
            $FDist = acos($FDist);
            $FDist = rad2deg($FDist);
            $FMiles = $FDist * 60 * 1.1515;
            // Get result
            if ((new StrOf)->Same($AUnit, "km")) $FResult = ($FMiles * 1.609344); // kilometer
            elseif ((new StrOf)->Same($AUnit, "m")) $FResult = ($FMiles  * 1609.344); // meter
            elseif ((new StrOf)->Same($AUnit, "mi")) $FResult = $FMiles; // miles
            elseif ((new StrOf)->Same($AUnit, "nmi")) $FResult = $FMiles / 1.150779448; // nautical miles
            elseif ((new StrOf)->Same($AUnit, "in")) $FResult = ($FMiles * 63360); // inches
            elseif ((new StrOf)->Same($AUnit, "cm")) $FResult = ($FMiles * 160934.4); // centimeter
            elseif ((new StrOf)->Same($AUnit, "yd")) $FResult = ($FMiles * 1760); // yard
            elseif ((new StrOf)->Same($AUnit, "ft")) $FResult = ($FMiles * 5280); // feet
            else $FResult = $FMiles; // miles
        }
        if ($ADecimal <> 0) $FResult = (new DefaultOf)->ValueFromString($FResult, $ADecimal);
        return $FResult;
    }

}

// Const Get Array Of
const AO_Combine = "AO_Combine";
const AO_Merge = "AO_Merge";
const AO_Column = "AO_Column";
const AO_Cut = "AO_Cut";
const AO_GetKeyAll = "AO_GetKeyAll";
const AO_Chunk = "AO_Chunk";

// Const Get Array Of
const AA_Trim = "AA_Trim";
const AA_ToValue = "AA_ToValue";
const AA_ToArray = "AA_ToArray";
const AA_Ternary = "AA_Ternary";

/**
 * ArrayOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class ArrayOf {

    /**
     * @param $AValue
     * @param bool $ASubLength
     * @return int
     */
    public function Length($AValue, $ASubLength = false) {
        $FResult = 0;
        if (is_array($AValue)) {
            if ($ASubLength) $this->LengthExecute1($AValue, $FResult); else $FResult = count($AValue);
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $AResult
     */
    private function LengthExecute1($AValue, &$AResult) {
        foreach ($AValue as $FValue) {
            if (is_array($FValue)) $this->LengthExecute1($FValue, $AResult);
            elseif (!is_null($FValue)) $AResult += 1;
        }
    }

    /**
     * @param $AValue
     * @param $ASubLength
     * @return bool
     */
    public function Empty($AValue, $ASubLength = false) {
        return $this->Length($AValue, $ASubLength) < 1;
    }

    /**
     * @param $AValue
     * @param int $ANumber
     * @param bool $ASubValue
     * @return mixed|null
     */
    public function Value($AValue, $ANumber = 1, $ASubValue = false) {
        $FResult = null;
        if (is_array($AValue)) {
            $FCount = $this->Length($AValue);
            if (($FCount > 0) and (new DefaultOf)->IntervalCheck($ANumber, 1, $FCount)) {
                if (array_key_exists($ANumber - 1, $AValue)) $FResult = $AValue[$ANumber - 1]; else {
                    $FIndex = 0;
                    foreach ($AValue as $FValue) {
                        $FIndex += 1;
                        if ($ANumber == $FIndex) {
                            $FResult = $FValue;
                            break;
                        }
                    }
                }
                if ($ASubValue and is_array($FResult)) $FResult = $this->Value($FResult, $ANumber, $ASubValue);
            }
        } elseif ($ANumber == 1) $FResult = $AValue;
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $AOneMode
     * @return mixed|null
     */
    public function First($AValue, $AOneMode = false) {
        if (!$AOneMode) $FResult = $this->Value($AValue, 1, true);
        elseif (is_array($AValue) and ($this->Length($AValue) == 1) and isset($AValue[0])) $FResult = $AValue[0];
        else $FResult = $AValue;
        return $FResult;
    }

    /**
     * @param $AFileName
     * @param $AResult
     * @param string $AKey
     * @param null $AInterval
     * @return int
     */
    public function FromFile($AFileName, &$AResult, $AKey = CH_EQUAL, $AInterval = null) {
        $AResult = [];
        if (file_exists($AFileName)) {
            $FFile = fopen($AFileName, "r");
            if ($FFile) {
                if (is_null($AInterval)) {
                    while (!feof($FFile)) {
                        $this->FromFileExecute1(fgets($FFile), $AKey, $AResult);
                    }
                } else {
                    $FValue = null;
                    while (!feof($FFile)) {
                        $FChar = fgetc($FFile);
                        if ((new StrOf)->Found($AInterval, $FChar, 1, SF_SameText)) {
                            $this->FromFileExecute1($FValue, $AKey, $AResult);
                            $FValue = null;
                        } else $FValue .= $FChar;
                    }
                    $this->FromFileExecute1($FValue, $AKey, $AResult);
                }
                fclose($FFile);
            }
        }
        return $this->Length($AResult);
    }

    /**
     * @param $AText
     * @param $AKey
     * @param $AResult
     */
    private function FromFileExecute1($AText, $AKey, &$AResult) {
        $FText = trim((new StrOf)->From($AText));
        if ((new StrOf)->Length($FText) > 0) {
            if (!is_null($AKey) and ($this->FromString($FText, $AKey, $FResult, 2) > 1)) $AResult[$this->Value($FResult)] = $this->Value($FResult, 2); else array_push($AResult, $FText);
        }
    }

    /**
     * Returns the array value from key and value
     * <hr>
     * <b>Example:</b>
     * * Combine: ([1, 2, 3], ["one", "two", [1, 2, 3]]) - [1 => "one", 2 => "two", 3 => [1, 2, 3]]
     * * Combine: ("text", ["hi"], [2, 3]) - [0 => 2, 1 => 3, "text" => [0 => "hi"]]
     * * Combine: ([1, "two" => 2, 3], ["two" => 5]) - [2 => 5]
     *
     * @param $AParam
     * @param array $AValues
     * @return array|mixed
     */
    public function Of($AParam, ...$AValues) {
        $FResult = [];
        $FCountArg = func_num_args() - 1;
        switch ($AParam) {
            case AO_Combine: // Array combine
                if ($FCountArg > 1) {
                    // Get param
                    if ($FCountArg > 2) {
                        $FResult = func_get_arg(1);
                        $FNames = func_get_arg(2);
                        $FValues = func_get_arg(3);
                    } else {
                        $FNames = func_get_arg(1);
                        $FValues = func_get_arg(2);
                    }
                    // Execute
                    if ($this->Length($FNames) > 0) {
                        if (!is_array($FValues)) $FValues = [$FValues];
                        foreach ($FNames as $FKey => $FValue) {
                            if (array_key_exists($FKey, $FValues)) $FResult[$this->First($FValue)] = $FValues[$FKey];
                        }
                    } else $FResult[$this->First($FNames)] = $FValues;
                }
                break;
            case AO_Merge:
                foreach ($AValues as $FValue) {
                    if ((new StrOf)->Length($FValue) > 0) {
                        if (is_array($FValue)) $FResult = array_merge($FResult, $FValue); else array_push($FResult, $FValue);
                    }
                }
                break;
            case AO_Column:
                if ($FCountArg > 1) {
                    // Get param
                    $FValues = func_get_arg(1);
                    $FNames = func_get_arg(2);
                    if (is_array($FValues) and !is_null($FNames)) {
                        $FResult = array_column($FValues, $FNames);
                    }
                }
                break;
            case AO_Cut:
                if ($FCountArg > 1) {
                    // Get param
                    $FParam1 = func_get_arg(1);
                    $FParam2 = func_get_arg(2);
                    if ($FCountArg > 2) $FParam3 = func_get_arg(3); else $FParam3 = null;
                    if ($FCountArg > 3) $FParam4 = func_get_arg(4); else $FParam4 = false;
                    // Execute
                    if (is_array($FParam1) and (new DefaultOf)->TypeCheck($FParam2)) {
                        if ($FParam2 >= 0) $FParam2 -= 1;
                        $FResult = array_slice($FParam1, $FParam2, $FParam3, $FParam4);
                        if ($FParam3 == 1) $FResult = $this->Value($FResult);
                    }
                }
                break;
            case AO_GetKeyAll:
                foreach ($AValues as $FValue) {
                    if ($this->Length($FValue) > 0) {
                        foreach ($FValue as $FSubKey => $FSubValue) {
                            if ((new DefaultOf)->TypeCheck($FSubKey)) $FParam1 = $FSubValue; else $FParam1 = $FSubKey;
                            if ((new StrOf)->Length($FParam1) > 0) {
                                if (is_array($FParam1)) $FResult = array_merge($FResult, $FParam1); else array_push($FResult, $FParam1);
                            }
                        }
                    } elseif ((new StrOf)->Length($FValue) > 0) array_push($FResult, $FValue);
                }
                break;
            case AO_Chunk:
                if ($FCountArg > 1) {
                    // Get param
                    $FParam1 = func_get_arg(1);
                    $FParam2 = func_get_arg(2);
                    if ($FCountArg > 2) $FParam3 = func_get_arg(3); else $FParam3 = false;
                    // Execute
                    if (is_array($FParam1) and ($FParam2 > 0)) $FResult = array_chunk($FParam1, $FParam2);
                    if ($FParam3 and ($this->Length($FResult) > 0)) {
                        $FLast = $FResult[$this->Length($FResult) - 1];
                        if ($this->Length($FLast) <> $FParam2) {
                            unset($FResult[$this->Length($FResult) - 1]);
                            $FResult = array_merge($FResult, $FLast);
                        }
                    }
                }
                break;
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param string $AInterval
     * @param null $AResult
     * @param null $ALimit
     * @param null $AKeys
     * @return int
     */
    public function FromString($AValue, $AInterval = CH_SPEC, &$AResult = null, $ALimit = null, $AKeys = null) {
        if (is_array($AValue)) {
            $AResult = $AValue;
            $FResult = (new ArrayOf)->Length($AResult);
        } else {
            $AResult = [];
            $FResult = 0;
            $FSubInterval = null;
            if (isset($AValue)) {
                if (is_array($AInterval)) {
                    foreach ($AInterval as $FKey => $FValue) {
                        if ((new DefaultOf)->TypeCheck($FKey)) {
                            $FInterval = $FValue;
                            $FSubInterval = null;
                        } else {
                            $FInterval = $FKey;
                            $FSubInterval = $FValue;
                        }
                        if ((new StrOf)->Pos($AValue, $FInterval) > 0) $FResult = $this->FromString($AValue, $FInterval, $AResult, $ALimit, $AKeys);
                        if ($FResult > 0) break;
                    }
                } elseif ((new StrOf)->Length($AValue) > 0) {
                    $FValue = (new StrOf)->From($AValue);
                    if (is_null($AInterval)) {
                        $FLen = (new StrOf)->Length($FValue);
                        for ($InX = 1; $InX <= $FLen; $InX++) {
                            $AResult[$InX] = (new StrOf)->Copy($FValue, $InX, 1);
                        }
                    } else {
                        if (is_null($ALimit)) $AResult = explode($AInterval, $FValue); else $AResult = explode($AInterval, $FValue, $ALimit);
                    }
                    if (!is_null($AKeys)) $AResult = (new StrOf)->Replace($AResult, null, $AKeys, SR_ArrayKeys);
                    $FResult = $this->Length($AResult);
                }
            }
            if (($FResult > 0) and !is_null($FSubInterval)) {
                foreach ($AResult as $FKey => $FValue) {
                    if ($this->FromString($FValue, $FSubInterval, $ASubResult, $ALimit, $AKeys) > 0) $AResult[$FKey] = $ASubResult;
                }
            }
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $AInterval
     * @param null $ALimit
     * @param null $AKeys
     * @return array
     */
    public function FromStringWithArray($AValue, $AInterval = CH_SPEC, $ALimit = null, $AKeys = null) {
        $FResult = [];
        $this->FromString($AValue, $AInterval, $FResult, $ALimit, $AKeys);
        return $FResult;
    }

    /**
     * @param $AValue
     * @param false $AParse
     * @return array|mixed|null
     */
    public function FromJSON($AValue, $AParse = false) {
        if (!(new StrOf)->Found($AValue, [CH_BRACE_FIGURE_BEGIN, CH_BRACE_FIGURE_END], 1, null, true)) $FResult = (new DefaultOf)->ValueFromString($AValue);
        elseif ($AParse === false) {
            if (is_array($AValue)) {
                $FResult = [];
                foreach ($AValue as $FKey => $FValue) {
                    $FResult[$FKey] = $this->FromJSON($FValue);
                }
            } else $FResult = json_decode((new StrOf)->Replace($AValue, CH_PATH, CH_PATH . CH_PATH), JSON_OBJECT_AS_ARRAY);
        } else {
            $FResult = [];
            $FParseKeys = $this->Of(AO_GetKeyAll, $AParse);
            if (is_array($AValue)) {
                foreach ($AValue as $FKey => $FValue) {
                    if ((new StrOf)->Found($FParseKeys, $FKey, 1, SF_SameText)) {
                        if (isset($AParse[$FKey])) $FResult = array_merge($FResult, $this->FromJSON($FValue, $AParse[$FKey])); else $FResult = array_merge($FResult, $this->FromJSON($FValue, null));
                    } elseif (is_array($FValue)) $FResult[$FKey] = $this->FromJSON($FValue, $AParse); else $FResult[$FKey] = $FValue;
                }
            } else {
                $FParseJSON = $this->FromJSON($AValue);
                if ($FParseJSON) {
                    if ($this->Length($FParseKeys) == 0) $FResult = $FParseJSON; else {
                        foreach ($FParseJSON as $FKey => $FValue) {
                            if ((new StrOf)->Found($FParseKeys, $FKey, 1, SF_SameText)) {
                                if (isset($AParse[$FKey])) $FResult[$this->First($AParse[$FKey])] = $FValue; else $FResult[$FKey] = $FValue;
                            }
                        }
                    }
                }
            }
        }
        return $this->First($FResult, true);
    }

    /**
     * @param $AValue
     * @param bool $ASubJSON
     * @return mixed
     */
    public function ToJSON($AValue, $ASubJSON = false, $AForce = true) {
        $FResult = $AValue;
        if (!is_array($FResult) and $AForce) $FResult = [$FResult];
        if ($ASubJSON) {
            if ($this->Length($FResult) > 0) {
                foreach($FResult as $FKey => $FValue) {
                    if (is_array($FValue)) {
                        $FEncode = json_encode($FValue, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);
                        if ($FEncode) $FResult[$FKey] = (new StrOf)->Replace($FEncode, [CH_PATH . CH_PATH, CH_PATH . CH_ANTI_PATH], [CH_PATH, CH_ANTI_PATH]); else $FResult[$FKey] = null;
                    }
                }
            } else $FResult = $this->ToJSON($FResult);
        } elseif (is_array($FResult)) {
            $FEncode = json_encode($FResult, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);
            if ($FEncode) $FResult = (new StrOf)->Replace($FEncode, [CH_PATH . CH_PATH, CH_PATH . CH_ANTI_PATH], [CH_PATH, CH_ANTI_PATH]); else $FResult = null;
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $AInterval
     * @param bool $ASubArray
     * @return array|mixed|string|null
     */
    public function ToString($AValue, $AInterval, $ASubArray = true, $APattern = null) {
        if ($this->Length($AValue) > 0) {
            $FResult = null;
            foreach ($AValue as $FValue) {
                if (is_array($FValue)) {
                    if ($ASubArray) $FSubResult = $this->ToString($FValue, $AInterval, $ASubArray, $APattern); else $FSubResult = null;
                } else $FSubResult = $FValue;
                if ($FSubResult === $AInterval) $FResult .= $AInterval;
                elseif (is_null($APattern)) $FResult = (new StrOf)->Add($FResult, $FSubResult, $AInterval); else $FResult = (new StrOf)->Add($FResult, (new StrOf)->Replace($APattern, '%s', $FSubResult), $AInterval);
            }
        } else $FResult = (new StrOf)->From($AValue);
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $AResult
     * @return array|int
     */
    public function FromStringWithKey($AValue, &$AResult) {
        $AResult = [];
        If (($this->FromString($AValue, CH_NET, $FSubResult) > 0) and ($this->FromString($this->Value($FSubResult), CH_SPEC, $FKeys) > 0) and ($this->FromString($this->Value($FSubResult, 2), CH_SPEC, $FValues) > 0) and ($this->Length($FKeys) == $this->Length($FValues))) return $AResult = array_combine($FKeys, $FValues);
        return $this->Length($AResult);
    }

    /**
     * @param $AValue
     * @return string|null
     */
    public function ToStringWithKey($AValue) {
        if ($this->Length($AValue) > 0) return implode(CH_SPEC, array_keys($AValue)) . CH_NET . implode(CH_SPEC, array_values($AValue)); else return null;
    }

    /**
     * @param $AValue
     * @param $AResult
     * @param null $AMin
     * @param null $AMax
     * @param int $AType
     * @param int $AStep
     * @param bool $ASort
     * @return int
     */
    public function FromFormatNumber($AValue, &$AResult, $AMin = null, $AMax = null, $AType = FILTER_VALIDATE_INT, $AStep = 1, $ASort = true) {
        $AResult = [];
        if ($this->FromString($AValue, CH_COMMA, $FResult) > 0) {
            foreach ($FResult as $FValue) {
                $FValue = trim($this->First($FValue));
                if ((new DefaultOf)->TypeCheck($FValue, $AType)) {
                    $FValue = (new DefaultOf)->ValueFromString($FValue);
                    if ((new DefaultOf)->IntervalCheck($FValue, $AMin, $AMax)) array_push($AResult, $FValue);
                } elseif ($this->FromString($FValue, CH_MINUS, $FSubResult) == 2) {
                    $FValue1 = $this->Value($FSubResult);
                    $FValue2 = $this->Value($FSubResult, 2);
                    if ((new DefaultOf)->TypeCheck($FValue1, $AType) and (new DefaultOf)->TypeCheck($FValue2, $AType) and ($FValue1 <= $FValue2)) {
                        foreach (range($FValue1, $FValue2, $AStep) as $FSubValue) {
                            if ((new DefaultOf)->IntervalCheck($FSubValue, $AMin, $AMax)) array_push($AResult, $FSubValue);
                        }
                    }
                }
            }
            if ($ASort) {
                $AResult = array_unique($AResult);
                sort($AResult);
            }
        }
        return $this->Length($AResult);
    }

    /**
     * @param $AValue
     * @param $AKeys
     * @param $AResult
     * @param null $AMax
     * @return int
     */
    public function FromFormatKeys($AValue, $AKeys, &$AResult, $AMax = null) {
        $AResult = [];
        if (((new StrOf)->Length($AValue) > 0) and ($this->Length($AKeys) > 0) and (new StrOf)->Found($AValue, $AKeys)) {
            $FText = $AValue;
            if ((new StrOf)->Found($FText, [1, 2, 3, 4, 5, 6, 7, 8, 9])) {
                $FKey = null;
                $FTextLen = (new StrOf)->Length($FText);
                for ($InX = 0; $InX < $FTextLen; $InX++) {
                    if ((new StrOf)->Found($FText[$InX], $AKeys)) {
                        if ((new DefaultOf)->TypeCheck($FKey) and (is_null($AMax) or (new DefaultOf)->IntervalCheck($FKey, 1, $AMax))) $AResult[$FKey] = $FText[$InX];
                        $FKey = null;
                    } elseif ((new StrOf)->Found($FText[$InX], [1, 2, 3, 4, 5, 6, 7, 8, 9, 0])) $FKey = $FKey .$FText[$InX];
                }
                ksort($AResult);
            } else {
                $FTextLen = floor((new StrOf)->Length($FText) / 2) - 1;
                $FCharList = count_chars($FText, 1);
                arsort($FCharList);
                foreach ($FCharList as $FKey => $FValue) {
                    if ($FValue >= $FTextLen) {
                        if (!(new StrOf)->Found(chr($FKey), $AKeys)) $FText = (new StrOf)->Replace($FText, chr($FKey), CH_FREE);
                    } else break;
                }
                $FTextLen = (new StrOf)->Length($FText);
                if (!is_null($AMax)) $FTextLen = min($FTextLen, $AMax);
                for ($InX = 0; $InX < $FTextLen; $InX++) {
                    if ((new StrOf)->Found($FText[$InX], $AKeys)) $AResult[$InX + 1] = $FText[$InX];
                }
            }
        }
        return $this->Length($AResult);
    }

    /**
     * @param $ASource
     * @param $APath
     * @param $AResult
     * @param string $ASeparator
     * @param string $AInterval
     * @return int
     */
    public function FromFormatPath($ASource, $APath, &$AResult, $ASeparator = CH_PATH, $AInterval = CH_POINT_COMMA) {
        $AResult = [];
        if ((new ArrayOf)->Length($ASource) > 0) $FResult = $ASource;
        elseif ($this->FromString($ASource, $AInterval, $FResult) == 0) $FResult = null;
        if ((new ArrayOf)->Length($FResult) > 0) {
            $FIndex = $this->FromString($APath, $ASeparator) + 1;
            foreach ($FResult as $FValue) {
                if ((((new StrOf)->Length($APath) == 0) or ((new StrOf)->Pos($FValue, $APath . $ASeparator) == 1)) and ($this->FromString($FValue, $ASeparator, $FSubResult) >= $FIndex)) array_push($AResult, $this->Value($FSubResult, $FIndex));
            }
            if ($this->Length($AResult) > 0) $AResult = array_diff(array_unique($AResult), [CH_FREE]);
        }
        return $this->Length($AResult);
    }


    /**
     * @param $AValue
     * @param ...$AArgs
     * @return false|mixed
     */
    public function FromFunction($AValue, ...$AArgs) {
        if ($AValue instanceof Closure) return call_user_func($AValue, ...$AArgs); else return $AValue;
    }

    /**
     * @param $AValues
     * @param $AKeys
     * @return array
     */
    public function Combine($AValues, $AKeys) {
        $FResult = [];
        if (($this->Length($AValues) > 0) and ($this->Length($AKeys) > 0)) {
            foreach ($AValues as $FKey => $FValue) {
                if ((new DefaultOf)->TypeCheck($FKey) and is_array($FValue)) $FResult[$FKey] = $this->Combine($FValue, $AKeys); else {
                    foreach ($AKeys as $FSubKey => $FSubValue) {
                        if (is_array($FSubValue)) {
                            if ((new StrOf)->Found($FSubValue, $FKey, 1, SF_WithKeySame)) {
                                if (isset($FSubValue[$FKey])) $FResult[$FSubKey][$FSubValue[$FKey]] = $FValue; else $FResult[$FSubKey][$FKey] = $FValue;
                            } else $FResult[$FKey] = $FValue;
                        }
                    }
                }
            }
        }
        return $FResult;
    }

    /**
     * @param $AValues
     * @param $APath
     * @param $ADefault
     * @param $ASeparator
     * @return mixed
     */
    public function PathGet($AValues, $APath, $ADefault = null, $ASeparator = CH_POINT) {
        if ($this->FromString($APath, $ASeparator, $FSubResult) > 0) {
            $FResult = $AValues;
            foreach($FSubResult as $FKey) {
                if (!isset($FResult[$FKey])) return $ADefault;
                $FResult = $FResult[$FKey];
            }
        } else $FResult = $AValues;
        return $FResult;
    }

    /**
     * @param $AValues
     * @param $APath
     * @param $ANewValue
     * @param $ASeparator
     * @return bool
     */
    public function PathSet(&$AValues, $APath, $ANewValue, $ASeparator = CH_POINT) {
        $FValues = $AValues;
        if ($this->FromString($APath, $ASeparator, $FSubResult) > 0) {
            if (isset($AValues) and !is_array($AValues)) $AValues = [$AValues];
            $FResult = &$AValues;
            foreach($FSubResult as $FKey) {
                $FResult = &$FResult[$FKey];
            }
            $FResult = $ANewValue;
        } else $AValues = $ANewValue;
        return $FValues != $AValues;
    }

    /**
     * @param $AValues
     * @param $APath
     * @param $ASeparator
     * @return bool
     */
    public function PathDelete(&$AValues, $APath, $ASeparator = CH_POINT) {
        $FValues = $AValues;
        if ($this->FromString($APath, $ASeparator, $FSubResult) > 0) {
            if (isset($AValues) and !is_array($AValues)) $AValues = [$AValues];
            $FMax = (new ArrayOf)->Length($FSubResult);
            while ($this->PathDeleteExecute1($AValues, $FSubResult, $FMax)) {
                array_pop($FSubResult);
            }
            if ((new ArrayOf)->Length($AValues) < 1) $AValues = null;
        } else $AValues = null;
        return $FValues != $AValues;
    }

    private function PathDeleteExecute1(&$AValues, $AKeys, $AMax) {
        $FCount = (new ArrayOf)->Length($AKeys);
        if ($FCount > 0) {
            $FResult = &$AValues;
            $i = 0;
            foreach($AKeys as $FKey) {
                $i++;
                if (!isset($FResult[$FKey])) return false;
                elseif ($i == $FCount) {
                    if (($AMax == $FCount) or ((new ArrayOf)->Length($FResult[$FKey]) < 1)) unset($FResult[$FKey]);
                } else $FResult = &$FResult[$FKey];
            }
            return true;
        } else return false;
    }

    /**
     * @param $AValues
     * @param $APath
     * @param $ASeparator
     * @return bool
     */
    public function PathExists($AValues, $APath, $ASeparator = CH_POINT) {
        if ($this->FromString($APath, $ASeparator, $FSubResult) > 0) {
            $FResult = $AValues;
            foreach ($FSubResult as $FKey) {
                if (!isset($FResult[$FKey])) return false;
                $FResult = $FResult[$FKey];
            }
            return true;
        } else return false;
    }

    /**
     * @param $AValue
     * @param $AAction
     * @param $AParam
     * @return array
     */
    public function FromAction($AValues, $AParam) {
        $FResult = $AValues;
        if (!$this->Empty($FResult) and !$this->Empty($AParam) and isset($AParam['action']) and isset($AParam['name'])) {
            $FAction = $AParam['action'];
            $FName = $AParam['name'];
            if ($FName == CH_STAR) {
                switch ($FAction) {
                    case AA_Trim:
                        $FLength = (new DefaultOf)->ValueCheck($AParam['length'], 0);
                        foreach ($FResult as $FKey => $FValue) {
                            if ($FLength > 0) $FResult[$FKey] = trim((new StrOf)->Copy(trim($FValue), 1, $FLength, false, CH_POINT_THREE)); else $FResult[$FKey] = trim($FValue);
                        }
                        break;
                    case AA_ToValue:
                        $FDecimal = (new DefaultOf)->ValueCheck($AParam['decimal'], 2);
                        $FThousand = (new DefaultOf)->ValueCheck($AParam['thousand'], CH_FREE);
                        foreach ($FResult as $FKey => $FValue) {
                            $FResult[$FKey] = (new DefaultOf)->ValueFromString($FValue, $FDecimal, $FThousand);
                        }
                        break;
                    case AA_ToArray:
                        $FSeparator = (new DefaultOf)->ValueCheck($AParam['separator'], CH_COMMA);
                        foreach ($FResult as $FKey => $FValue) {
                            if ($this->FromString($FValue, $FSeparator, $FSubResult) > 0) {
                                foreach ($FSubResult as $FSubKey => $FSubValue) {
                                    $FResult[$FKey . CH_BRACE_SQR_BEGIN . ($FSubKey + 1) . CH_BRACE_SQR_END] = $FSubValue;
                                }
                            }
                        }
                        break;
                }
            } else {
                switch ($FAction) {
                    case AA_Trim:
                        if (isset($FResult[$FName])) {
                            $FLength = (new DefaultOf)->ValueCheck($AParam['length'], 0);
                            if ($FLength > 0) $FResult[$FName] = trim((new StrOf)->Copy(trim($FResult[$FName]), 1, $FLength, false, CH_POINT_THREE)); else $FResult[$FName] = trim($FResult[$FName]);
                        }
                        break;
                    case AA_ToValue:
                        if (isset($FResult[$FName])) {
                            $FDecimal = (new DefaultOf)->ValueCheck($AParam['decimal'], 2);
                            $FThousand = (new DefaultOf)->ValueCheck($AParam['thousand'], CH_FREE);
                            $FResult[$FName] = (new DefaultOf)->ValueFromString($FResult[$FName], $FDecimal, $FThousand);
                        }
                        break;
                    case AA_ToArray:
                        $FSeparator = (new DefaultOf)->ValueCheck($AParam['separator'], CH_COMMA);
                        if (isset($FResult[$FName]) and ($this->FromString($FResult[$FName], $FSeparator, $FSubResult) > 0)) {
                            foreach ($FSubResult as $FSubKey => $FSubValue) {
                                $FResult[$FName . CH_BRACE_SQR_BEGIN . ($FSubKey + 1) . CH_BRACE_SQR_END] = $FSubValue;
                            }
                            unset($FResult[$FName]);
                        }
                        break;
                    case AA_Ternary:
                        $FValue1 = (new DefaultOf)->ValueCheck($AParam['value1'], null);
                        $FValue2 = (new DefaultOf)->ValueCheck($AParam['value2'], null);
                        $FFalse = (new DefaultOf)->ValueCheck($AParam['false'], null);
                        $FTrue = (new DefaultOf)->ValueCheck($AParam['true'], null);
                        if (isset($FValue1, $FValue2, $FFalse, $FTrue)) {
                            $FReplaceKeys = array_keys($FResult);
                            $FReplaceValues = array_values($FResult);
                            $FValue1 = (new StrOf)->Replace($FValue1, $FReplaceKeys, $FReplaceValues);
                            $FValue2 = (new StrOf)->Replace($FValue2, $FReplaceKeys, $FReplaceValues);
                            $FFalse = (new StrOf)->Replace($FFalse, $FReplaceKeys, $FReplaceValues);
                            $FTrue = (new StrOf)->Replace($FTrue, $FReplaceKeys, $FReplaceValues);
                            $FResult[$FName] = ($FValue1 == $FValue2) ? $FTrue : $FFalse;
                        } else $FResult[$FName] = $FFalse;
                        break;
                }
            }
        }
        return $FResult;
    }

    /**
     * @param $AValues
     * @param $AFormat
     * @param $AClearSubArray
     * @param $AStringToValue
     * @param $AFixedKey
     * @return array
     */
    public function FromFormat($AValues, $AFormat, &$AResult, $ADefault = CH_FREE, $AInterval = CH_FREE, $AClearSubArray = true, $AFixedKey = true, $AParam = null) {
        $FResult = $ADefault;
        $AResult = $AValues;
        if (!$this->Empty($AResult) and !(new StrOf)->Empty($AFormat)) {
            $FResult = CH_FREE;
            $FKeys = null;
            $FLength = (new ArrayOf)->Length($AResult);
            $FCount = 0;
            foreach ($AResult as $FKey => $FValue) {
                $FCount++;
                if (is_array($FValue)) {
                    if (!$AFixedKey or is_null($FKeys)) $FKeys = array_keys($FValue);
                    $AResult[$FKey] = (new StrOf)->Replace($AFormat, $FKeys, array_values($FValue));
                    if ((new DefaultOf)->TypeCheck($FKey)) $AResult[$FKey] = (new StrOf)->Replace($AResult[$FKey], CH_NUMBER, $FKey + 1);
                    if (is_array($AParam)) {
                        foreach ($AParam as $FParamValue) {
                            $AResult[$FKey] = $this->FromAction($FValue, $FParamValue);
                        }
                    }
                    if (!$AClearSubArray) $AResult[$FKey] = [$AResult[$FKey]];
                    $FResult .= $AResult[$FKey];
                    if (isset($AInterval) and ($FCount < $FLength)) $FResult .= $AInterval;
                }
            }
        }
        return $FResult;
    }

}

/**
 * DateTimeOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class DateTimeOf {

    /**
     * @param string $AFormat
     * @param string $ATimeZone
     * @return false|string
     */
    public function LocalDateTime($AFormat = "d.m.Y H:i:s", $ATimeZone = "Asia/Tashkent") {
        date_default_timezone_set($ATimeZone);
        return date($AFormat);
    }

    /**
     * @param $ADate
     * @param string $AFormat
     * @param string $ADefault
     * @param string[] $ATimeText
     * @return array|mixed|string|null
     */
    public function TimeAgo($ADate, $AFormat = "[Time] [Time_Text] ago", $ADefault = "long ago", $ATimeText = ["second", "minute", "hour", "day", "month", "year"]) {
        if (isset($ADate)) {
            $FLength = array("60", "60", "24", "30", "12", "10");
            $FTimestamp = strtotime($ADate);
            $FCurrentTime = time();
            if($FCurrentTime >= $FTimestamp) {
                $FDiff     = time()- $FTimestamp;
                for($FIndex = 0; $FDiff >= $FLength[$FIndex] && $FIndex < (new ArrayOf)->Length($FLength) - 1; $FIndex++) {
                    $FDiff = $FDiff / $FLength[$FIndex];
                }
                $FDiff = round($FDiff);
                return (new StrOf)->Replace($AFormat, ["[Time]", "[Time_Text]"], [$FDiff, $ATimeText[$FIndex]]);
            }
        }
        return $ADefault;
    }

}

// Const Get File Info
const SFI_Curl = "SFI_Curl";

// Const Hash MD5 Type
const HMT_Number = "HMT_Number";
const HMT_Char = "HMT_Char";
const HMT_Default = "HMT_Default";

/**
 * SystemOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class SystemOf {

    /**
     * @param $AFileName
     * @param int $AOptions
     * @return array|CURLFile|string|string[]
     */
    public function FileInfo($AFileName, $AOptions = PATHINFO_FILENAME) {
        if ($AOptions == SFI_Curl) return curl_file_create($AFileName); else return pathinfo($AFileName, $AOptions);
    }

    /**
     * @param string $ADefault
     * @return array|mixed|string|null
     */
    public function Values($ADefault = 'UNKNOWN') {
        $FResult = [];
        $FValue = null;
        // Get client ip adress
        $FItems = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'];
        foreach($FItems as $FItem) {
            if (!empty($_SERVER[$FItem]) && filter_var($_SERVER[$FItem], FILTER_VALIDATE_IP)) {
                $FValue['IPv4 Address'] = $_SERVER[$FItem];
                break;
            }
        }
        // Get config data
        foreach ((new ArrayOf)->FromStringWithArray(shell_exec('ipconfig/all'), 'Description') as $FItem) {
            if ((new StrOf)->Found($FItem, ['Physical Address', 'IPv4 Address'], 1, null, true)) {
                foreach ((new ArrayOf)->FromStringWithArray($FItem, [CH_NEW_LINE => ':']) as $FItem2) {
                    if ((new ArrayOf)->Length($FItem2) > 0) {
                        $FTitle = (new StrOf)->Replace($FItem2[0], [CH_POINT, CH_TRIM], CH_FREE);
                        if ($FTitle === CH_FREE) {
                            $FValue['Description'] = $FItem2[1];
                        } elseif ((new StrOf)->Same($FTitle, 'Physical Address')) {
                            $FValue['Physical Address'] = $FItem2[1];
                        } elseif ((new StrOf)->Same($FTitle, 'IPv4 Address') and !isset($FValue['IPv4 Address'])) {
                            $FValue['IPv4 Address'] = (new StrOf)->Cut($FItem2[1], 1, CH_BRACE_BEGIN);
                        }
                    }
                }
                break;
            }
        }
        if (isset($FValue)) {
            $FValue['Host name'] = gethostname();
            $FResult['Network'] = $FValue;
        }
        // Get system data
        $FItems = ['HDD Serial' => 'DISKDRIVE', 'Bios serial' => 'bios'];
        foreach ($FItems as $FKey => $FItem) {
            $FValue = shell_exec('wmic ' . $FItem . ' GET SerialNumber 2>&1');
            if (isset($FValue)) $FResult['System'][$FKey] = (new StrOf)->Replace($FValue, 'SerialNumber', CH_FREE);
        }
        // Clear trimming
        if ((new ArrayOf)->Length($FResult) > 0) return (new StrOf)->Replace($FResult, [CH_NEW_LINE, CH_TRIM], CH_FREE); else return $ADefault;
    }

    /**
     * @param $AValue
     * @param $AKey
     * @param $AType
     * @param $ALength
     * @return string
     */
    public function HashMD5($AValue, $AKey, $AType = HMT_Default, $ALength = 32) {
        $FHash = md5(trim($AKey) . trim($AValue) . trim($AKey));
        if ($AType == HMT_Char) {
            $FResult = CH_FREE;
            foreach (str_split($FHash) as $FChar) {
                if (is_numeric($FChar)) $FResult .= chr((int)$FChar + 97); else $FResult .= $FChar;
            }
        } elseif ($AType == HMT_Number) {
            $FResult = CH_FREE;
            foreach (str_split($FHash) as $FChar) {
                if (is_numeric($FChar)) $FResult .= $FChar; else $FResult .= ord($FChar) - 97;
            }
        } else $FResult = $FHash;
        return (new StrOf)->Copy($FResult, 1, $ALength);
    }

}

// Const Language
const LNG_Execute = "LNGExecute";
const LNG_Execute2 = "LNGExecute2";
const LNG_Execute3 = "LNGExecute3";
const LNG_Execute4 = "LNGExecute4";
const LNG_Execute5 = "LNGExecute5";
const LNG_Skip = "LNGSkip";

/**
 * LanguageOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class LanguageOf {

    private $FFileName;
    private $FLogFile;
    private $FData;
    private $FLog;

    /**
     * LanguageOf constructor.
     * @param $AFileName
     * @param null $ALogFile
     */
    public function __construct($AFileName, $ALogFile = null) {
        $this->FFileName = $AFileName;
        $this->FLogFile = $ALogFile;
        $this->CreateData();
        $this->CreateLog();
    }

    /**
     * @return array|null
     */
    private function CreateData() {
        $this->FData = [];
        if ((new ArrayOf)->FromFile($this->FFileName, $FResult) > 0) {
            $this->FData = $FResult;
        }
        return $this->FData;
    }

    /**
     * @return array|null
     */
    private function CreateLog() {
        $this->FLog = [];
        if ((new ArrayOf)->FromFile($this->FLogFile, $FResult, null) > 0) {
            $this->FLog = $FResult;
        }
        return $this->FLog;
    }

    /**
     * @param $AText
     * @return bool
     */
    private function WriteLog($AText) {
        $FResult = false;
        $FText = trim((new StrOf)->From($AText));
        if (!(new StrOf)->Found($this->FLog, $FText, 1, SF_SameText) and (new StrOf)->ToFile($this->FLogFile, $FText, (new ArrayOf)->Length($this->FLog) > 0)) {
            array_push($this->FLog, $FText);
            $FResult = true;
        }
        return $FResult;
    }

    /**
     * @param $AText
     * @param array $AValues
     * @return string
     */
    private function GetValue($AText, $AValues = []) {
        if ((new ArrayOf)->Length($AValues) > 0) {
            try {
                $FResult = vsprintf($AText, $AValues);
            }
            catch (Exception $Err) {
                $FResult = $AText;
                echo "Message: " .$Err->getMessage();
            }
        } elseif (!is_array($AValues) and !is_null($AValues)) {
            try {
                $FResult = sprintf($AText, $AValues);
            }
            catch (Exception $Err) {
                $FResult = $AText;
                echo "Message: " .$Err->getMessage();
            }
        } else $FResult = $AText;
        return (new StrOf)->Replace($FResult, CH_SPEC, CH_NEW_LINE);
    }

    /**
     * @param $AText
     * @param array $AValues
     * @return string
     */
    private function Translate($AText, $AValues = []) {
        if (!is_null($this->FLogFile)) $this->WriteLog($AText);
        if (isset($this->FData[$AText])) $FResult = $this->GetValue($this->FData[$AText], $AValues); else $FResult = $this->GetValue($AText, $AValues);
        return $FResult;
    }

    /**
     * @param $AText
     * @param array $AValues
     * @param string $AInterval
     * @param null $AIntervalReplace
     * @return array|string|null
     */
    public function Execute($AText, $AValues = [], $AInterval = CH_SPEC, $AIntervalReplace = null) {
        if (is_null($AText)) $FResult = null;
        elseif ($AText === CH_NEW_LINE) $FResult = $AText;
        elseif (is_string($AText)) {
            $FIndex = 0;
            $FValuesCount = (new ArrayOf)->Length($AValues);
            if ((new ArrayOf)->FromString($AText, $AInterval, $FResult) > 1) {
                foreach ($FResult as $FKey => $FValue) {
                    if ($FValuesCount > 0) {
                        $FStrValuesCount = (new StrOf)->Found($FValue, ["%s", "%d"], 1, SF_GetCount);
                        if ($FStrValuesCount == $FValuesCount) $FResult[$FKey] = $this->Translate($FValue, $AValues); else {
                            $FResult[$FKey] = $this->Translate($FValue, array_slice($AValues, $FIndex, $FStrValuesCount));
                            $FIndex += $FStrValuesCount;
                        }
                    } else $FResult[$FKey] = $this->Translate($FValue, $AValues);
                }
                $FResult = implode($AInterval, $FResult);
                if (!is_null($AIntervalReplace)) $FResult = (new StrOf)->Replace($FResult, $AInterval, $AIntervalReplace);
            } else $FResult = $this->Translate($AText, $AValues);
        } elseif (is_array($AText)) {
            $FResult = $AText;
            foreach ($FResult as $FKey => $FValue) {
                if ((new StrOf)->Same($FKey, LNG_Execute, 95)) $FResult[$FKey] = $this->Execute((new ArrayOf)->Value($FValue), (new DefaultOf)->ValueCheck((new ArrayOf)->Value($FValue, 2), $AValues), (new DefaultOf)->ValueCheck((new ArrayOf)->Value($FValue, 3), $AInterval), (new DefaultOf)->ValueCheck((new ArrayOf)->Value($FValue, 4), $AIntervalReplace));
                elseif ($FKey !== LNG_Skip) $FResult[$FKey] = $this->Execute($FValue, $AValues, $AInterval, $AIntervalReplace);
            }
        } else $FResult = $this->Translate($AText, $AValues);
        return $FResult;
    }

    /**
     * @param $AText
     * @param array $AValues
     * @param string $AInterval
     * @param string $AFormat
     * @return string|null
     */
    public function Format($AText, $AValues = [], $AInterval = CH_SPEC, $AFormat = CH_NEW_LINE) {
        return (new ArrayOf)->ToString($this->Execute($AText, $AValues, $AInterval, $AFormat), $AFormat);
    }
}

/**
 * MysqlDbOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class MysqlDbOf extends MysqliDb {

    /**
     * MysqlDbOf constructor.
     * @param null $AHost
     * @param null $AUserName
     * @param null $APassword
     * @param null $ADatabase
     * @param int $APort
     */
    public function __construct($AHost = null, $AUserName = null, $APassword = null, $ADatabase = null, $APort = 3306) {
        parent::__construct($AHost, $AUserName, $APassword, $ADatabase, $APort);
    }

    /**
     * @param array $ATableNames
     * @return bool|null
     */
    public function ConnectOf($ATableNames = []) {
        $FResult = false;
        try {
            $FResult = (($this->connect() == null) and (((new ArrayOf)->Length($ATableNames) == 0) or ($this->tableExists($ATableNames))));
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $AValues
     * @param $AWhere
     * @param string $ACond
     * @param string $ADefaultProp
     * @return bool|MysqlDbOf
     */
    public function joinOf($AValues, $AWhere, $ACond = "AND", $ADefaultProp = "ID") {
        $FResult = false;
        try {
            if ((new ArrayOf)->Length($AValues) > 0) {
                foreach ($AValues as $FValue) {
                    if ((new ArrayOf)->FromString($FValue, CH_SPEC, $FSubResult) == 3) {
                        $FResult = $this->join((new ArrayOf)->Value($FSubResult), (new ArrayOf)->Value($FSubResult, 2), (new ArrayOf)->Value($FSubResult, 3));
                    }
                }
            }
            if ($FResult and ((new ArrayOf)->Length($AWhere) > 0)) {
                foreach ($AWhere as $WhereKey => $WhereValue) {
                    if (!(new DefaultOf)->TypeCheck($WhereKey)) {
                        if ((new ArrayOf)->Length($WhereValue) > 0) {
                            foreach ($WhereValue as $FKey => $FValue) {
                                if (is_array($FValue)) {
                                    foreach ($FValue as $FSubKey => $FSubValue) {
                                        if (((new StrOf)->Length($FSubKey) > 0) and ((new StrOf)->Length($FSubValue) > 0)) $FResult = $this->joinWhere($WhereKey, $FKey, $FSubValue, $FSubKey, $ACond);
                                    }
                                } elseif (is_null($FValue)) {
                                    $FResult = $this->joinWhere($WhereKey, $FKey, $FValue, "IS", $ACond);
                                } elseif (!(new DefaultOf)->TypeCheck($FKey)) $FResult = $this->joinWhere($WhereKey, $FKey, $FValue, CH_EQUAL, $ACond);
                                elseif ((new StrOf)->Length($FValue) > 0) $FResult = $this->joinWhere($WhereKey, $FValue);
                            }
                        } elseif ((new DefaultOf)->TypeCheck($WhereValue) or ($ADefaultProp <> "ID")) $FResult = $this->joinWhere($WhereKey, $ADefaultProp, $WhereValue, CH_EQUAL, $ACond);
                        elseif ((new StrOf)->Length($WhereValue) > 0) $FResult = $this->joinWhere($WhereKey, $WhereValue);
                    }
                }
            }
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $AValues
     * @param string $ADefaultProp
     * @return mixed
     */
    private function whereSubParse($AValues, $ADefaultProp = "ID") {
        $FResult = $AValues;
        if ((new ArrayOf)->Length($FResult) > 0) {
            foreach ($FResult as $FKey => $FValue) {
                if ((new StrOf)->Found(["AND", "OR"], $FKey, 1, SF_SameText) and ((new ArrayOf)->Length($FValue) > 0)) {
                    $FSubQuery = $this->subQuery();
                    $this->whereSub($FSubQuery, $FValue, $FKey, $ADefaultProp);
                    $FSubQuery->_buildCondition(CH_FREE, $FSubQuery->_where);
                    $FResult[$FKey] = CH_BRACE_BEGIN . (new StrOf)->Replace(trim($FSubQuery->replacePlaceHolders($FSubQuery->_query, $FSubQuery->_bindParams)), CH_SPACE . CH_SPACE, CH_SPACE) . CH_BRACE_END;
                    $FSubQuery->reset();
                    unset($FSubQuery);
                }
            }
        }
        return $FResult;
    }

    /**
     * @param $ASubQuery
     * @param $AValues
     * @param string $ACond
     * @param string $ADefaultProp
     * @return void|null
     */
    private function whereSub($ASubQuery, $AValues, $ACond = "AND", $ADefaultProp = "ID") {
        if (isset($ASubQuery) and ((new StrOf)->Length($AValues) > 0)) {
            if (is_array($AValues)) {
                foreach ($AValues as $FKey => $FValue) {
                    if (is_array($FValue)) {
                        foreach ($FValue as $FSubKey => $FSubValue) {
                            if (((new StrOf)->Length($FSubKey) > 0) and ((new StrOf)->Length($FSubValue) > 0)) $ASubQuery->where($FKey, $FSubValue, $FSubKey, $ACond);
                        }
                    } elseif (is_null($FValue)) {
                        $ASubQuery->where($FKey, $FValue, "IS", $ACond);
                    } elseif (!(new DefaultOf)->TypeCheck($FKey)) {
                        if ((new StrOf)->Found(["AND", "OR"], $FKey, 1, SF_SameText)) $ASubQuery->where($FValue); else $ASubQuery->where($FKey, $FValue, CH_EQUAL, $ACond);
                    } elseif ((new StrOf)->Length($FValue) > 0) $ASubQuery->where($FValue);
                }
            } elseif ((new StrOf)->Found(["AND", "OR"], $ADefaultProp, 1, SF_SameText)) $ASubQuery->where($AValues);
            elseif ((new DefaultOf)->TypeCheck($AValues) or ($ADefaultProp <> "ID")) $ASubQuery->where($ADefaultProp, $AValues, CH_EQUAL, $ACond);
            elseif ((new StrOf)->Length($AValues) > 0) $ASubQuery->where($AValues);
        }
        return $ASubQuery;
    }

    /**
     * @param $AValues
     * @param string $ACond
     * @param string $ADefaultProp
     * @return bool|MysqlDbOf
     */
    public function whereOf($AValues, $ACond = "AND", $ADefaultProp = "ID") {
        $FResult = false;
        if (is_array($AValues)) {
            $FValues = $this->whereSubParse($AValues, $ADefaultProp);
            foreach ($FValues as $FKey => $FValue) {
                if (is_array($FValue)) {
                    foreach ($FValue as $FSubKey => $FSubValue) {
                        if (((new StrOf)->Length($FSubKey) > 0) and ((new StrOf)->Length($FSubValue) > 0)) $FResult = $this->where($FKey, $FSubValue, $FSubKey, $ACond);
                    }
                } elseif (is_null($FValue)) {
                    $FResult = $this->where($FKey, $FValue, "IS", $ACond);
                } elseif (!(new DefaultOf)->TypeCheck($FKey)) {
                    if ((new StrOf)->Found(["AND", "OR"], $FKey, 1, SF_SameText)) $FResult = $this->where($FValue); else $FResult = $this->where($FKey, $FValue, CH_EQUAL, $ACond);
                } elseif ((new StrOf)->Length($FValue) > 0) $FResult = $this->where($FValue);
            }
        } elseif ((new StrOf)->Found(["AND", "OR"], $ADefaultProp, 1, SF_SameText)) $FResult = $this->where($AValues);
        elseif ((new DefaultOf)->TypeCheck($AValues) or ($ADefaultProp <> "ID")) $FResult = $this->where($ADefaultProp, $AValues, CH_EQUAL, $ACond);
        elseif ((new StrOf)->Length($AValues) > 0) $FResult = $this->where($AValues);
        return $FResult;
    }

    /**
     * @param $AValues
     * @return bool|MysqlDbOf
     */
    public function orderByOf($AValues) {
        $FResult = false;
        try {
            if ((new StrOf)->Length($AValues) > 0) {
                if (is_array($AValues)) {
                    foreach ($AValues as $FKey => $FValue) {
                        if ((new StrOf)->Found(["ASC", "DESC"], $FValue, 1, SF_SameText)) $FResult = $this->orderBy($FKey, $FValue); else $FResult = $this->orderBy($FValue);
                    }
                } else $FResult = $this->orderBy($AValues);
            }
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $AValues
     * @return MysqlDbOf|false
     */
    public function groupByOf($AValues) {
        $FResult = false;
        try {
            if ((new StrOf)->Length($AValues) > 0) {
                $FResult = $this->groupBy($AValues);
            }
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $ATableName
     * @param string $AColumns
     * @param null $ANumRows
     * @param null $AFormat
     * @param bool $AFormatClearSubArray
     * @param null $AJSONParseField
     * @return array|MysqlDbOf|string|null
     */
    public function getOf($ATableName, $AColumns = "*", $ANumRows = null, $AFormat = null, $AFormatClearSubArray = true, $AJSONParseField = null) {
        $FResult = null;
        try {
            // Get result
            if ($ANumRows === 1) $FResult = $this->getOne($ATableName, $AColumns); else $FResult = $this->get($ATableName, $ANumRows, $AColumns);
            if ($FResult) {
                // Get JSON parsed
                if ((new StrOf)->Length($AJSONParseField) > 0) $FResult = (new ArrayOf)->FromJSON($FResult, $AJSONParseField);
                // Get format
                if (($ANumRows <> 1) and !is_null($AFormat)) {
                    (new ArrayOf)->FromFormat($FResult, $AFormat, $FResult, CH_FREE, CH_FREE, $AFormatClearSubArray);
                }
            }
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $ATableName
     * @param $AValues
     * @param $AResult
     * @param string $AColumns
     * @param null $ANumRows
     * @param null $AFormat
     * @param bool $AFormatClearSubArray
     * @param null $AOrder
     * @param null $AGroup
     * @param null $AJoin
     * @param null $AJoinWhere
     * @param null $AJSONParseField
     * @param string $ACond
     * @return bool|null
     */
    public function Filter($ATableName, $AValues, &$AResult, $AColumns = "*", $ANumRows = null, $AFormat = null, $AFormatClearSubArray = true, $AOrder = null, $AGroup = null, $AJoin = null, $AJoinWhere = null, $AJSONParseField = null, $ACond = "AND") {
        $AResult = null;
        if ((is_null($AJoin) or $this->joinOf($AJoin, $AJoinWhere, $ACond)) and (is_null($AValues) or $this->whereOf($AValues, $ACond)) and (is_null($AOrder) or $this->orderByOf($AOrder)) and (is_null($AGroup) or $this->groupByOf($AGroup))) $AResult = $this->getOf($ATableName, $AColumns, $ANumRows, $AFormat, $AFormatClearSubArray, $AJSONParseField);
        return (bool) $AResult;
    }

    /**
     * @param $ATableName
     * @param $AValues
     * @param $AResult
     * @param string $AColumns
     * @param null $AOrder
     * @param null $AGroup
     * @param null $AJoin
     * @param null $AJoinWhere
     * @param null $AJSONParseField
     * @param string $ACond
     * @return bool|null
     */
    public function FilterOne($ATableName, $AValues, &$AResult, $AColumns = "*", $AOrder = null, $AGroup = null, $AJoin = null, $AJoinWhere = null, $AJSONParseField = null, $ACond = "AND") {
        return $this->Filter($ATableName, $AValues, $AResult, $AColumns, 1, null, true, $AOrder, $AGroup, $AJoin, $AJoinWhere, $AJSONParseField, $ACond);
    }

    /**
     * @param $ATableName
     * @param $AValues
     * @param $AResult
     * @param string $AColumns
     * @param null $ANumRows
     * @param string $AFilterName
     * @param string $ACond
     * @param string $ADefaultProp
     * @return bool|null
     */
    public function FilterSub($ATableName, $AValues, &$AResult, $AColumns = "*", $ANumRows = null, $AFilterName = CH_FREE, $ACond = "AND", $ADefaultProp = "ID") {
        $AResult = null;
        try {
            if ((new StrOf)->Length($ATableName) > 0) {
                // Create result
                $AResult = $this->subQuery($AFilterName);
                // Where result
                $this->whereSub($AResult, $AValues, $ACond, $ADefaultProp);
                // Get result
                if ($ANumRows === 1) $AResult->getOne($ATableName, $AColumns); else $AResult->get($ATableName, $ANumRows, $AColumns);
            }
        } catch (Exception $e) {
        }
        return (bool) $AResult;
    }

    /**
     * @param $ATableName
     * @param $AValues
     * @param $AResult
     * @param string $AColumns
     * @param string $AFilterName
     * @param string $ACond
     * @param string $ADefaultProp
     * @return bool|null
     */
    public function FilterOneSub($ATableName, $AValues, &$AResult, $AColumns = "*", $AFilterName = CH_FREE, $ACond = "AND", $ADefaultProp = "ID") {
        return $this->FilterSub($ATableName, $AValues, $AResult, $AColumns, 1, $AFilterName, $ACond, $ADefaultProp);
    }

    /**
     * @param $ATableName
     * @param $AValues
     * @param $AResult
     * @param false $AMultiData
     * @param null $ADuplicate
     * @param null $AOtherData
     * @param null $ACombineKey
     * @return bool|null
     */
    public function Append($ATableName, $AValues, &$AResult, $AMultiData = false, $ADuplicate = null, $AOtherData = null, $ACombineKey = null) {
        $AResult = 0;
        $FResult = false;
        try {
            $FValues = $AValues;
            if ((new ArrayOf)->Length($FValues) > 0) {
                if ($AMultiData === false) {
                    if (!is_null($ADuplicate)) $this->onDuplicate($ADuplicate);
                    if (!is_null($AOtherData)) $FValues = (new ArrayOf)->Of(AO_Merge, $FValues, $AOtherData);
                    if (!is_null($ACombineKey)) $FValues = (new ArrayOf)->Combine($FValues, $ACombineKey);
                    $FID = $this->insert($ATableName, (new ArrayOf)->ToJSON($FValues, true));
                    if ($FID) {
                        $AResult = (int)$FID;
                        $FResult = true;
                    }
                } else {
                    if (!is_null($ADuplicate)) $this->onDuplicate($ADuplicate);
                    if (is_array($AMultiData)) $FID = $this->AppendExecute1($ATableName, $FValues, $AMultiData, $ADuplicate, $AOtherData, $ACombineKey); else $FID = $this->AppendExecute1($ATableName, $FValues, null, $ADuplicate, $AOtherData, $ACombineKey);
                    if ($FID) {
                        $AResult = $this->getInsertId();
                        $FResult = true;
                    }
                }
            }
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $ATableName
     * @param $AMultiInsertData
     * @param $ADataKeys
     * @param $ADuplicate
     * @param $AOtherData
     * @param $ACombineKey
     * @return array|bool
     */
    private function AppendExecute1($ATableName, $AMultiInsertData, $ADataKeys, $ADuplicate, $AOtherData, $ACombineKey) {
        $FResult = [];
        try {
            $FAutoCommit = (!isset($this->_transaction_in_progress) || !$this->_transaction_in_progress);
            if($FAutoCommit) $this->startTransaction();
            foreach ($AMultiInsertData as $FValue) {
                if (((new ArrayOf)->Length($ADataKeys) > 0) and ((new ArrayOf)->Length($ADataKeys) == (new ArrayOf)->Length($FValue))) $FValue = array_combine($ADataKeys, $FValue);
                if (!$this->Append($ATableName, $FValue, $FID, false, $ADuplicate, $AOtherData, $ACombineKey)) {
                    if ($FAutoCommit) $this->rollback();
                    return false;
                }
                $FResult[] = $FID;
            }
            if ($FAutoCommit) $this->commit();
        } catch (Exception $e) {
        }
        return $FResult;
    }

    /**
     * @param $ATableName
     * @param $AID
     * @param $AValues
     * @param null $ANumRows
     * @return bool|null
     */
    public function Edit($ATableName, $AID, $AValues, $ANumRows = null) {
        $FResult = false;
        if (((new ArrayOf)->Length($AValues) > 0) and $this->whereOf($AID)) {
            try {
                if ($this->update($ATableName, (new ArrayOf)->ToJSON($AValues, true), $ANumRows)) $FResult = true;
            } catch (Exception $e) {
            }
        }
        return $FResult;
    }

    /**
     * @param $ATableName
     * @param $AValues
     * @return bool|null
     */
    public function Deleted($ATableName, $AValues) {
        $FResult = false;
        if ($this->whereOf($AValues)) {
            try {
                $FResult = $this->delete($ATableName);
            } catch (Exception $e) {
            }
        }
        return $FResult;
    }
}

/**
 * TelegramOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class TelegramOf extends Telegram {

    const GROUP_POST = "group";
    const POLL_ANSWER = "poll_answer";

    private $valid;

    /**
     * TelegramOf constructor.
     * @param string $AToken
     */
    public function __construct($AToken = "") {
        parent::__construct($AToken, false);
        $this->valid = false;
    }

    /**
     * @param array $content
     * @return mixed
     */
    public function editMessageMedia(array $content) {
        return $this->endpoint("editMessageMedia", $content);
    }

    /**
     * @param array $content
     * @return mixed
     */
    public function sendPoll(array $content) {
        return $this->endpoint('sendPoll', $content);
    }

    /**
     * @param $type
     * @param $media
     * @param $caption
     * @param $parse_mode
     * @return false|string
     */
    public function buildMedia($type, $media, $caption, $parse_mode) {
        $replyMarkup = ["type" => $type, "media" => $media, "caption" => $caption, "parse_mode"=> $parse_mode];
        return json_encode($replyMarkup, true);
    }

    /**
     * @param $AButtons
     * @param bool $AInline
     * @return false|string|null
     */
    private function GetBuildButtons($AButtons, $AInline = false) {
        $FButtons = null;
        if ($AInline) {
            if ((new ArrayOf)->Length($AButtons) > 0) $FButtons = $this->buildInlineKeyBoard($this->GetBuildButtonsExecute1($AButtons, $AInline));
        } elseif ((new ArrayOf)->Length($AButtons) > 0) $FButtons = $this->buildKeyBoard($this->GetBuildButtonsExecute1($AButtons), false, true); else $FButtons = $this->buildKeyBoardHide();
        return $FButtons;
    }

    /**
     * @param $AButtons
     * @param bool $AInline
     * @return array
     */
    private function GetBuildButtonsExecute1($AButtons, $AInline = false) {
        $FButton = [];
        foreach ($AButtons as $FValue) {
            if (is_array($FValue)) {
                foreach ($FValue as $FSubKey => $FSubValue) $FValue[$FSubKey] = $this->GetBuildButtonsExecute2($FSubValue, $AInline);
                array_push($FButton, $FValue);
            } else array_push($FButton, [$this->GetBuildButtonsExecute2($FValue, $AInline)]);
        }
        return $FButton;
    }

    /**
     * @param $AValue
     * @param bool $AInline
     * @return array
     */
    private function GetBuildButtonsExecute2($AValue, $AInline = false) {
        $FValue = (new StrOf)->From($AValue);
        if (((new ArrayOf)->FromString($FValue, CH_EQUAL, $FResult) >= 2) or ((new ArrayOf)->FromString($FValue, CH_SPEC, $FResult) >= 2)) {
            $FNameStr = (new ArrayOf)->Value($FResult);
            $FValueStr = (new ArrayOf)->Value($FResult, 2);
            $FUrlStr = (new ArrayOf)->Value($FResult, 3);
            if ($AInline) $FResult = $this->buildInlineKeyboardButton($FNameStr, $FUrlStr, $FValueStr); else {
                if ((new StrOf)->Same($FValueStr, "[PHONE]")) $FResult = $this->buildKeyboardButton($FNameStr, true);
                elseif ((new StrOf)->Same($FValueStr, "[LOCATION]")) $FResult = $this->buildKeyboardButton($FNameStr, false, true); else $FResult = $this->buildKeyboardButton($FValue);
            }
        } elseif ($AInline) $FResult = $this->buildInlineKeyboardButton($FValue, CH_FREE, $FValue); else $FResult = $this->buildKeyboardButton($FValue);
        return $FResult;
    }

    /**
     * @return string
     */
    public function getUpdateTypeOf() {
        $FResult = $this->getUpdateType();
        if (($FResult === $this->MESSAGE) and ($this->getData()["message"]["chat"]["type"] === $this->GROUP_POST)) $FResult = $this->GROUP_POST;
        elseif (!$FResult) {
            if (isset($this->getData()["poll_answer"])) $FResult = $this->POLL_ANSWER;
        }
        return $FResult;
    }

    /**
     * @param $AToken
     * @return bool
     */
    public function setToken($AToken) {
        $this->bot_token = $AToken;
        return true;
    }

    /**
     * @return mixed
     */
    public function ChatIDOf() {
        if ($this->getUpdateTypeOf() === $this->POLL_ANSWER) $FResult = $this->getData()["poll_answer"]["user"]["id"]; else $FResult = $this->ChatID();
        return $FResult;
    }

    /**
     * @return mixed
     */
    public function PollIDOf() {
        if ($this->getUpdateTypeOf() === $this->POLL_ANSWER) $FResult = $this->getData()["poll_answer"]["poll_id"]; else $FResult = null;
        return $FResult;
    }

    /**
     * @return mixed
     */
    public function CaptionOf() {
        if ($this->getUpdateTypeOf() === $this->CALLBACK_QUERY) $FResult = $this->getData()["callback_query"]["message"]["caption"]; else $FResult = $this->Caption();
        return $FResult;
    }

    /**
     * @param array $ATypes
     * @return bool
     */
    public function Active($ATypes = []) {
        $this->valid = (!empty($this->getData()) and (((new ArrayOf)->Length($ATypes) == 0) or in_array($this->getUpdateTypeOf(), $ATypes)));
        return $this->valid;
    }

    /**
     * @return bool
     */
    public function Valid() {
        return ($this->valid and !empty($this->bot_token));
    }

    /**
     * @param null $ACharCase
     * @return string|null
     */
    public function TextOf($ACharCase = null) {
        if ($this->getUpdateTypeOf() === $this->POLL_ANSWER) {
            $FResult = $this->getData()["poll_answer"]["option_ids"];
            if ((new ArrayOf)->Length($FResult) > 0) $FResult = range("A", "Z")[(new ArrayOf)->First($FResult)]; else $FResult = null;
        } else $FResult = $this->Text();
        return (new StrOf)->CharCase($FResult, $ACharCase);
    }

    /**
     * @param false $APhoneValid
     * @return bool|null
     */
    public function ContactOf($APhoneValid = false) {
        $FResult = (new DefaultOf)->ValueCheck($this->getData()["message"]["contact"], null);
        if ($FResult and $APhoneValid) $FResult = (new StrOf)->Copy($this->PhoneOf(), 1, 1) == 9;
        return $FResult;
    }

    /**
     * @return string
     */
    public function PhoneOf() {
        return (new StrOf)->Copy($this->getData()["message"]["contact"]["phone_number"], 9, 9, true);
    }

    /**
     * @param string $ADefault
     * @return string
     */
    public function FullName($ADefault = "none") {
        if ($this->getUpdateTypeOf() === $this->POLL_ANSWER) {
            $FData = $this->getData()["poll_answer"]["user"];
            $FResult = trim(trim($FData["first_name"]) . CH_SPACE . trim($FData["last_name"]));
            if ((new StrOf)->Length($FResult) == 0) $FResult = trim($FData["username"]);
        } else {
            $FResult = trim(trim($this->FirstName()) . CH_SPACE . trim($this->LastName()));
            if ((new StrOf)->Length($FResult) == 0) $FResult = trim($this->Username());
        }
        if ((new StrOf)->Length($FResult) == 0) $FResult = trim($ADefault);
        return $FResult;
    }

    /**
     * @param string $AAction
     * @param null $AChatID
     * @return mixed|null
     */
    public function sendChatActionOf($AAction = "typing", $AChatID = null) {
        $FResult = $this->sendChatAction(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "action" => $AAction]);
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) return $FResult; return null;
    }

    /**
     * @param $AText
     * @param null $AButtons
     * @param bool $AInline
     * @param null $AChatID
     * @param null $AGetMessageID
     * @param bool $ADeleteOk
     * @return mixed|null
     */
    public function sendMessageOf($AText, $AButtons = null, $AInline = false, $AChatID = null, &$AGetMessageID = null, $ADeleteOk = false) {
        $FResult = null;
        if ((new StrOf)->Length($AText) > 0) {
            if (is_null($AButtons)) $FResult = $this->sendMessage(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "text" => $AText, "parse_mode" => "html"]); else $FResult = $this->sendMessage(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, $AInline), "text" => $AText, "parse_mode" => "html"]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) {
            if ($ADeleteOk and (new DefaultOf)->TypeCheck($AGetMessageID)) $this->deleteMessageOf($AGetMessageID);
            $AGetMessageID = $FResult["result"]["message_id"];
            return $FResult;
        } else {
            $AGetMessageID = null;
            return null;
        }
    }

    /**
     * @param $APhoto
     * @param string $ACaption
     * @param null $AButtons
     * @param bool $AInline
     * @param null $AChatID
     * @param null $AGetMessageID
     * @return mixed|null
     */
    public function sendPhotoOf($APhoto, $ACaption = "", $AButtons = null, $AInline = false, $AChatID = null, &$AGetMessageID = null) {
        $FResult = null;
        if ((new StrOf)->Length($APhoto) > 0) {
            if (is_null($AButtons)) $FResult = $this->sendPhoto(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "photo" => $APhoto, "caption" => $ACaption, "parse_mode" => "html"]); else $FResult = $this->sendPhoto(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, $AInline), "photo" => $APhoto, "caption" => $ACaption, "parse_mode" => "html"]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) {
            $AGetMessageID = $FResult["result"]["message_id"];
            return $FResult;
        } else {
            $AGetMessageID = null;
            return $FResult;// null;
        }
    }

    /**
     * @param $ADocument
     * @param string $ACaption
     * @param null $AButtons
     * @param false $AInline
     * @param null $AChatID
     * @param null $AGetMessageID
     * @return mixed|null
     */
    public function sendDocumentOf($ADocument, $ACaption = CH_FREE, $AButtons = null, $AInline = false, $AChatID = null, &$AGetMessageID = null) {
        $FResult = null;
        if (((new StrOf)->Length($ADocument) > 0) and ((new StrOf)->Pos($ADocument, CH_SPEC) == 0)) {
            if (file_exists($ADocument)) $FDocument = (new SystemOf)->FileInfo($ADocument, SFI_Curl); else $FDocument = $ADocument;
            if (is_null($AButtons)) $FResult = $this->sendDocument(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "document" => $FDocument, "caption" => $ACaption, "parse_mode" => "html"]); else $FResult = $this->sendDocument(["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, $AInline), "document" => $FDocument, "caption" => $ACaption, "parse_mode" => "html"]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) {
            $AGetMessageID = $FResult["result"]["message_id"];
            return $FResult;
        } else {
            $AGetMessageID = null;
            return null;
        }
    }

    /**
     * @param $AQuestion
     * @param $AOptions
     * @param int $ACorrect
     * @param int $APeriod
     * @param null $AButtons
     * @param null $AChatID
     * @param null $AGetPollID
     * @return mixed|null
     */
    public function sendPollOf($AQuestion, $AOptions, $ACorrect = 0, $APeriod = 0, $AButtons = null, $AChatID = null, &$AGetPollID = null) {
        $FResult = null;
        if (((new StrOf)->Length($AQuestion) > 0) and (new DefaultOf)->IntervalCheck((new ArrayOf)->Length($AOptions), 2, 10)) {
            foreach ($AOptions as $FKey => $FValue) $AOptions[$FKey] = (new StrOf)->Copy($FValue, 1, 100, false, CH_POINT_THREE);
            $FContent = ["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "question" => (new StrOf)->Copy($AQuestion, 1, 300, false, CH_POINT_THREE), "options" => json_encode($AOptions), "is_anonymous" => false];
            if (isset($ACorrect) and ($ACorrect > 0)) $FContent["correct_option_id"] = $ACorrect;
            if (isset($APeriod) and ($APeriod > 0)) $FContent["open_period"] = $APeriod;
            if (!is_null($AButtons)) $FContent["reply_markup"] = $this->GetBuildButtons($AButtons);
            $FResult = $this->sendPoll($FContent);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) {
            $AGetPollID = $FResult["result"]["poll"]["id"];
            return $FResult;
        } else {
            $AGetPollID = null;
            return null;
        }
    }

    /**
     * @param $APhoto
     * @param string $ACaption
     * @param null $AButtons
     * @param false $AReplyMessage
     * @param null $AChatID
     * @param null $AGetMessageID
     * @param false $ADeleteOk
     * @return mixed|null
     */
    public function sendAnimationOf($APhoto, $ACaption = CH_FREE, $AButtons = null, $AReplyMessage = false, $AChatID = null, &$AGetMessageID = null, $ADeleteOk = false) {
        $FResult = null;
        if ((new StrOf)->Length($APhoto) > 0) {
            $FContent = ["chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "animation" => $APhoto];
            if ((new StrOf)->Length($ACaption) > 0) {
                $FContent["caption"] = $ACaption;
                $FContent["parse_mode"] = "html";
            }
            if (!is_null($AButtons)) $FContent["reply_markup"] = $this->GetBuildButtons($AButtons, true);
            if ($AReplyMessage) $FContent["reply_to_message_id"] = $this->MessageID();
            $FResult = $this->sendAnimation($FContent);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) {
            if ($ADeleteOk and (new DefaultOf)->TypeCheck($AGetMessageID)) $this->deleteMessageOf($AGetMessageID);
            $AGetMessageID = $FResult["result"]["message_id"];
            return $FResult;
        } else {
            $AGetMessageID = null;
            return null;
        }
    }

    /**
     * @param $AChatID
     * @param $AFromChatID
     * @param $AMessageID
     * @return mixed
     */
    public function sendForward($AChatID, $AFromChatID, $AMessageID) {
        return $this->endpoint('forwardMessage', ['chat_id' => $AChatID, 'from_chat_id' => $AFromChatID, 'message_id' => $AMessageID]);
    }


    /**
     * @param $AMessageID
     * @param $AText
     * @param null $AButtons
     * @param null $AChatID
     * @return mixed|null
     */
    public function editMessageOf($AMessageID, $AText, $AButtons = null, $AChatID = null) {
        $FResult = null;
        if ((new StrOf)->Length($AText) > 0) {
            if (is_null($AButtons)) $FResult = $this->editMessageText(["message_id" => (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), "chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "text" => $AText, "parse_mode" => "html"]); else $FResult = $this->editMessageText(["message_id" => (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), "chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, true), "text" => $AText, "parse_mode" => "html"]);
        }

        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) return $FResult; return null;
    }

    /**
     * @param $AMessageID
     * @param $ACaption
     * @param null $AButtons
     * @param null $AChatID
     * @return mixed|null
     */
    public function editMessageCaptionOf($AMessageID, $ACaption, $AButtons = null, $AChatID = null) {
        $FResult = null;
        if ((new StrOf)->Length($ACaption) > 0) {
            if (is_null($AButtons)) $FResult = $this->editMessageCaption(["message_id" => (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), "chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "caption" => $ACaption, "parse_mode" => "html"]); else $FResult = $this->editMessageCaption(["message_id" => (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), "chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, true), "caption" => $ACaption, "parse_mode" => "html"]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) return $FResult; return null;
    }

    /**
     * @param $AMessageID
     * @param $AMedia
     * @param string $ACaption
     * @param null $AButtons
     * @param null $AChatID
     * @param string $AMediaType
     * @return mixed|null
     */
    public function editMessageMediaOf($AMessageID, $AMedia, $ACaption = "", $AButtons = null, $AChatID = null, $AMediaType = "photo") {
        $FResult = null;
        if ((new StrOf)->Length($AMedia) > 0) {
            if (is_null($AButtons)) $FResult = $this->editMessageMedia(["message_id" => (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), "chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "media" => $this->buildMedia($AMediaType, $AMedia, $ACaption, "html")]); else $FResult = $this->editMessageMedia(["message_id" => (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), "chat_id" => (new DefaultOf)->ValueCheck($AChatID, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, true), "media" => $this->buildMedia($AMediaType, $AMedia, $ACaption, "html")]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) return $FResult; return null;
    }

    /**
     * @param null $AMessageID
     * @param null $AChatID
     * @param null $AExclude
     * @param array $ATypes
     */
    public function deleteMessageOf($AMessageID = null, $AChatID = null, $AExclude = null, $ATypes = []) {
        if (is_array($AMessageID)) {
            foreach ($AMessageID as $FValue) $this->deleteMessageOfExecute1($AChatID, $FValue, $AExclude, $ATypes);
        } else $this->deleteMessageOfExecute1($AChatID, (new DefaultOf)->ValueCheck($AMessageID, $this->MessageID()), $AExclude, $ATypes);
    }

    /**
     * @param $AChatID
     * @param $AMessageID
     * @param null $AExclude
     * @param array $ATypes
     * @return mixed|null
     */
    private function deleteMessageOfExecute1($AChatID, $AMessageID, $AExclude = null, $ATypes = []) {
        $FChatID = (new ArrayOf)->First($AChatID);
        $FMessageID = (new ArrayOf)->First($AMessageID);
        if ((new DefaultOf)->TypeCheck($FMessageID) and !(new StrOf)->Found($AExclude, $FMessageID, 1, SF_SameText) and (((new ArrayOf)->Length($ATypes) == 0) or in_array($this->getUpdateType(), $ATypes))) return $this->deleteMessage(["chat_id" => (new DefaultOf)->ValueCheck($FChatID, $this->ChatID()), "message_id" => $FMessageID]); else return null;
    }

    /**
     * @param string $AType
     * @return mixed
     */
    public function getFileID($AType = "document") {
        return $this->getData()["message"][$AType]["file_id"];
    }

    /**
     * @param string $AType
     * @return mixed
     */
    public function getFileName($AType = "document") {
        return $this->getData()["message"][$AType]["file_name"];
    }

    /**
     * @param $AResult
     * @param null $ACompareName
     * @return bool
     */
    public function downloadFileOf(&$AResult, $ACompareName = null) {
        $FResult = false;
        $AResult = CH_FREE;
        if ($this->getUpdateTypeOf() == $this->DOCUMENT) {
            $FFileID = $this->getFileID();
            $FFileName = $this->getFileName();
            $FData = $this->getFile($FFileID);
            if (file_exists($FFileName)) unlink($FFileName);
            if ($FData["ok"] and (is_null($ACompareName) or ((new StrOf)->Pos($FFileName, $ACompareName) > 0))) {
                $this->downloadFile($FData["result"]["file_path"], $FFileName);
                if (file_exists($FFileName)) {
                    $FResult = true;
                    $AResult = $FFileName;
                }
            }
        }
        return $FResult;
    }

    /**
     * @param $AChatID
     * @param null $AUserID
     * @return array|false|mixed
     */
    public function getChatMemberOf($AChatID, $AUserID = null) {
        if ((new ArrayOf)->Length($AChatID) > 1) {
            $FResult = [];
            foreach ($AChatID as $FValue) $FResult = (new ArrayOf)->Of(AO_Merge, $FResult, $this->getChatMemberOf($FValue, $AUserID));
            if ((new ArrayOf)->Length($FResult) == 0) $FResult = false;
            elseif ((new ArrayOf)->Length($FResult) == 1) $FResult = (new ArrayOf)->First($FResult);
        } else {
            $FChatID = trim((new ArrayOf)->First($AChatID));
            if ((new StrOf)->Length($FChatID) > 0) {
                $FResult = $this->getChatMember(["chat_id" => $FChatID, "user_id" => (new DefaultOf)->ValueCheck($AUserID, $this->UserID())]);
                if ((new DefaultOf)->ValueCheck($FResult["ok"], false)) $FResult = $FResult["result"]["status"]; else $FResult = false;
            } else $FResult = false;
        }
        return $FResult;
    }

    /**
     * @return mixed
     */
    public function getMeOf() {
        $FResult = $this->getMe();
        return $FResult["ok"];
    }

}

/**
 * FtpOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class FtpOf {

    private $FHost;
    private $FPort;
    private $FPassword;
    private $FStream;
    private $FTimeout;
    private $FUserName;

    /**
     * FtpOf constructor.
     * @param $AHost
     * @param $AUserName
     * @param $APassword
     * @param int $APort
     * @param int $ATimeout
     */
    public function  __construct($AHost, $AUserName, $APassword, $APort = 21, $ATimeout = 90) {
        $this->FHost = $AHost;
        $this->FUserName = $AUserName;
        $this->FPassword = $APassword;
        $this->FPort = (int)$APort;
        $this->FTimeout = (int)$ATimeout;
    }

    /**
     *
     */
    public function  __destruct() {
        $this->close();
    }

    /**
     * FTP connection
     * @param bool $APassive
     * @return bool
     */
    public function Connect($APassive) {
        $this->FStream = ftp_connect($this->FHost, $this->FPort, $this->FTimeout);
        if ($this->FStream and ftp_login($this->FStream, $this->FUserName, $this->FPassword)) {
            ftp_pasv($this->FStream, $APassive);
            return true;
        } else return false;
    }

    /**
     * FTP disconnection
     * @return $this
     */
    public function Close() {
        if ($this->FStream) {
            ftp_close($this->FStream);
            $this->FStream = false;
        }
        return $this;
    }

    /**
     * @param bool $APassive
     * @return bool
     */
    public function Reconnect($APassive) {
        sleep(1);
        $this->Close();
        sleep(1);
        return $this->Connect($APassive);
    }

    /**
     * FTP system type
     * @return false|string
     */
    public function GetSystemType() {
        return ftp_systype($this->FStream);
    }

    /**
     * Create directory
     * @param $ADirectory
     * @return bool
     */
    public function DirectoryCreate($ADirectory) {
        return ftp_mkdir($this->FStream, $ADirectory);
    }

    /**
     * Get current directory
     * @return string
     */
    public function DirectoryPath() {
        return ftp_pwd($this->FStream);
    }

    /**
     * Change current directory
     * @param $ADirectory
     * @return bool
     */
    public function DirectoryChange($ADirectory) {
        return ftp_chdir($this->FStream, $ADirectory);
    }

    /**
     * Remove directory
     * @param $ADirectory
     * @return bool
     */
    public function DirectoryRemove($ADirectory) {
        return ftp_rmdir($this->FStream, $ADirectory);
    }

    /**
     * Get all files list
     * @param $ADirectory
     * @return array|false
     */
    public function FileList($ADirectory) {
        return ftp_nlist($this->FStream, $ADirectory);
    }

    /**
     * Download file
     * @param $ARemoteFile
     * @param $ALocalFile
     * @param int $AMode
     * @return bool
     */
    public function FileDownload($ARemoteFile, $ALocalFile, $AMode = FTP_BINARY) {
        return ftp_get($this->FStream, $ALocalFile, $ARemoteFile, $AMode);
    }

    /**
     * Upload file
     * @param $ALocalFile
     * @param $ARemoteFile
     * @param int $AMode
     * @return bool
     */
    public function FileUpload($ALocalFile, $ARemoteFile, $AMode = FTP_BINARY) {
        return ftp_put($this->FStream, $ARemoteFile, $ALocalFile, $AMode);
    }

    /**
     * Rename file
     * @param $AOldName
     * @param $ANewName
     * @return bool
     */
    public function FileRename($AOldName, $ANewName) {
        return ftp_rename($this->FStream, $AOldName, $ANewName);
    }

    /**
     * Delete file
     * @param $ARemoteFile
     * @return bool
     */
    public function FileDelete($ARemoteFile) {
        return ftp_delete($this->FStream, $ARemoteFile);
    }

}

/**
 * EmbedOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class EmbedOf extends Embed {

    /**
     * @param Crawler|null $crawler
     * @param ExtractorFactory|null $extractorFactory
     */
    public function __construct(Crawler $crawler = null, ExtractorFactory $extractorFactory = null) {
        parent::__construct($crawler, $extractorFactory);
    }

}

/**
 * Html5Of
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class Html5Of extends HTML5 {

    /**
     * @param array $defaultOptions
     */
    public function __construct(array $defaultOptions = array()) {
        parent::__construct($defaultOptions);
    }

    public function Count($ASource, $ASearch) {
        if (file_exists($ASource)) $FSource = $this->load($ASource); else $FSource = $this->loadHTML($ASource);
        return (new StrOf)->Found($this->saveHTML($FSource), $ASearch, 1, SF_GetCount, false, false, ['<%s', '< %s']);
    }

}

// Const Get Arithmetic Operator
const GAO_Addition = "GAO_Addition";
const GAO_Subtraction = "GAO_Subtraction";
const GAO_Multiplication = "GAO_Multiplication";
const GAO_Division = "GAO_Division";
const GAO_Modulus = "GAO_Modulus";

/**
 * StorageOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 *
 */

class StorageOf {

    private $FType;
    private $FOptions;
    private $FObject = null;
    private $FSecurity = null;
    private $FSeparator = CH_POINT;
    private $FTableName = 'tstorage';
    private $FTimeout;
    private $FSessionName = 'algolteam';


    /**
     * @param $AType
     * @param $AOptions
     */
    public function __construct($AType = SOT_Request, $AOptions = []) {
        $this->FType = $AType;
        $this->FOptions = $AOptions;
        if (isset($this->FOptions['security'])) $this->FSecurity = $this->FOptions['security'];
        if (isset($this->FOptions['separator'])) $this->FSeparator = $this->FOptions['separator'];
        $this->Open();
    }

    private function ParseName($AValue, &$AName, &$APath) {
        $APath = (new ArrayOf)->FromStringWithArray($AValue, $this->FSeparator);
        $AName = $APath[0];
        if ((new ArrayOf)->Length($APath) > 1) unset($APath[0]); else $APath = null;
        return ;
    }

    private function GetHash($AValue) {
        if (isset($this->FSecurity)) {
            $FResult = $AValue;
            switch ($this->FType) {
                case SOT_Database:
                    $FResult .= (new DefaultOf)->ValueCheck($_SERVER['HTTP_USER_AGENT'], CH_FREE) . (new DefaultOf)->ValueCheck($_SERVER['REMOTE_ADDR'], CH_FREE);
                    break;
                case SOT_Dynamic:
                    $FResult .= (new DefaultOf)->ValueCheck(session_name(), CH_FREE) . (new DefaultOf)->ValueCheck(session_id(), CH_FREE);
                    break;
            }
            $FResult = (new SystemOf)->HashMD5($FResult, $this->FSecurity, HMT_Number);
        } else $FResult = $AValue;
        return $FResult;
    }

    public function isStarted() {
        $FResult = true;
        switch ($this->FType) {
            case SOT_Database:
                $FResult = ($this->FObject instanceof mysqli) and mysqli_ping($this->FObject);
                break;
            case SOT_Dynamic: // session
                $FResult = session_status() === PHP_SESSION_ACTIVE;
                break;
        }
        return $FResult;
    }

    private function Open() {
        $FResult = true;
        switch ($this->FType) {
            case SOT_Database:
                if (isset($this->FObject)) {
                    mysqli_close($this->FObject);
                    unset($this->FObject);
                }
                $this->FObject = mysqli_connect($this->FOptions['host'], $this->FOptions['username'], $this->FOptions['password'], $this->FOptions['database']);
                $FResult = (mysqli_errno($this->FObject) == 0) and (new StrOf)->ToSQL($this->FObject, "CREATE TABLE IF NOT EXISTS `" . $this->FTableName . "` (                    
	                `fkey` VARCHAR(64) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	                `fvalue` LONGTEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	                `fexpire` VARCHAR(16) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	                PRIMARY KEY (`fkey`) USING BTREE)
                    COLLATE='utf8mb4_unicode_ci'
                    ENGINE=InnoDB;"); //`id` INT(11) NOT NULL AUTO_INCREMENT,
                if (isset($this->FOptions['timeout'])) $this->FTimeout = $this->FOptions['timeout']; else $this->FTimeout = 86400 * 365;
                break;
            case SOT_Dynamic: // session
                if (session_id() !== CH_FREE) session_destroy();
                ini_set('session.cookie_lifetime', 0);
                ini_set('session.cookie_httponly', 1);
                ini_set('session.use_only_cookies', 1);
                ini_set('session.use_strict_mode', 1);
                ini_set('session.name', $this->FSessionName);
                ini_set('session.upload_progress.name', $this->FSessionName . '.upload');
                if (isset($_SERVER['HTTPS']) and ($_SERVER['HTTPS'] == 'on')) ini_set('session.cookie_secure', 1);
                if (isset($this->FOptions['timeout'])) ini_set('session.gc_maxlifetime', $this->FOptions['timeout']);
                $this->FTimeout = ini_get('session.gc_maxlifetime');
                $FResult = session_start();
                break;
            case SOT_File:
                if (isset($this->FOptions['timeout'])) $this->FTimeout = $this->FOptions['timeout']; else $this->FTimeout = 86400 * 30;
                break;
        }
        return $FResult;
    }

    public function Close() {
        switch ($this->FType) {
            case SOT_Database:
                if (isset($this->FObject)) {
                    mysqli_close($this->FObject);
                    unset($this->FObject);
                }
                break;
            case SOT_Dynamic: // session
                session_destroy();
                break;
            case SOT_File:
            case SOT_Request:
                $this->Clear();
                break;
        }
        return;
    }

    public function Get($AName, $ADefault = null) {
        $FResult = $ADefault;
        if ($this->isStarted() and !(new StrOf)->Empty($AName)) {
            $this->ParseName($AName, $FName, $FPath);
            switch ($this->FType) {
                case SOT_Database:
                    $FResult = (new StrOf)->ToSQL($this->FObject, "SELECT fvalue FROM " . $this->FTableName . " WHERE fkey = ? and fexpire > ? LIMIT 1", [$this->GetHash($FName), time()], TSF_One);
                    if (isset($FResult['fvalue'])) $FResult = (new ArrayOf)->FromJSON($FResult['fvalue']); else $FResult = null;
                    (new StrOf)->ToSQL($this->FObject, "DELETE FROM " . $this->FTableName . " WHERE fexpire < ?;", [time()]);
                    break;
                case SOT_Dynamic: // session
                    $FResult = $_SESSION[$this->GetHash($FName)];
                    break;
                case SOT_File: // cookie
                    $FResult = $_COOKIE[$this->GetHash($FName)];
                    if (isset($FResult)) $FResult = (new ArrayOf)->FromJSON($FResult); else $FResult = null;
                    break;
                case SOT_Request:
                    $FResult = $this->All();
                    if (isset($FResult)) $FResult = $FResult[$this->GetHash($FName)];
                    break;
            }
            $FResult = (new ArrayOf)->PathGet($FResult, $FPath, null, $this->FSeparator);
        }
//        $FResult = (new ArrayOf)->First($FResult, true);
        return $FResult;
    }

    public function Put($AName, $ADefault = null) {
        $FResult = $this->Get($AName, $ADefault);
        $this->Delete($AName);
        return $FResult;
    }

    public function Set($AName, $AValue) {
        $FResult = false;
        if (!(new StrOf)->Empty([$AName, $AValue])) {
            $this->ParseName($AName, $FName, $FPath);
            $FResult = $this->Get($FName);
            if ((new ArrayOf)->PathSet($FResult, $FPath, $AValue, $this->FSeparator)) {
                switch ($this->FType) {
                    case SOT_Database:
                        $FResult = (new StrOf)->ToSQL($this->FObject, "INSERT INTO " . $this->FTableName . " (fkey, fvalue, fexpire) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE fvalue = VALUES(fvalue), fexpire = VALUES(fexpire);", [$this->GetHash($FName), (new ArrayOf)->ToJSON($FResult), time() + $this->FTimeout]);
                        (new StrOf)->ToSQL($this->FObject, "DELETE FROM " . $this->FTableName . " WHERE fexpire < ?;", [time()]);
                        break;
                    case SOT_Dynamic: // session
                        $_SESSION[$this->GetHash($FName)] = $FResult;
                        break;
                    case SOT_File: // cookie
                        $FResult = setcookie($this->GetHash($FName), (new ArrayOf)->ToJSON($FResult), time() + $this->FTimeout, CH_ANTI_PATH);
                        break;
                    case SOT_Request:
                        $FResult = false;
                        break;
                }
            } else $FResult = false;
        }
        return (bool)$FResult;
    }

    public function Exists($AName) {
        return !is_null($this->Get($AName));
    }

    public function GetArithmetic($AName, $AValue = 1, $AOperator = GAO_Addition) {
        $FResult = $this->Get($AName, 0);
        switch ($AOperator) {
            case GAO_Addition:
                $FResult += $AValue;
                break;
            case GAO_Subtraction:
                $FResult -= $AValue;
                break;
            case GAO_Multiplication:
                $FResult *= $AValue;
                break;
            case GAO_Division:
                $FResult /= $AValue;
                break;
            case GAO_Modulus:
                $FResult %= $AValue;
                break;
        }
        $this->Set($AName, $FResult);
        return $FResult;
    }

    public function Delete($AName) {
        $FResult = false;
        if ($this->isStarted() and !(new StrOf)->Empty($AName)) {
            $this->ParseName($AName, $FName, $FPath);
            $FResult = $this->Get($FName);
            if (isset($FResult) and (is_null($FPath) or (new ArrayOf)->PathDelete($FResult, $FPath, $this->FSeparator))) {
                if (is_null($FPath) or is_null($FResult)) {
                    switch ($this->FType) {
                        case SOT_Database:
                            $FResult = (new StrOf)->ToSQL($this->FObject, "DELETE FROM " . $this->FTableName . " WHERE fkey = ?;", [$this->GetHash($FName)]);
                            break;
                        case SOT_Dynamic: // session
                            unset($_SESSION[$this->GetHash($FName)]);
                            break;
                        case SOT_Request:
                            unset($_COOKIE[$this->GetHash($FName)]);
                            setcookie($this->GetHash($FName), CH_FREE, time() - 3600, CH_ANTI_PATH);
                            break;
                        case SOT_File: // cookie
                            $FResult = false;
                            break;
                    }
                } else $FResult = $this->Set($FName, $FResult);
            } else $FResult = false;
        }
        return (bool)$FResult;
    }

    public function Clear() {
        $FResult = false;
        if ($this->isStarted()) {
            switch ($this->FType) {
                case SOT_Database:
                    $FResult = (new StrOf)->ToSQL($this->FObject, "TRUNCATE TABLE " . $this->FTableName . ";");
                    break;
                case SOT_Dynamic: // session
                    $FResult = session_unset();
                    break;
                case SOT_File: // cookie
                    $FResult = $_COOKIE;
                    if (isset($FResult[$this->FSessionName])) unset($FResult[$this->FSessionName]);
                    if (count($FResult) > 0) {
                        foreach ($FResult as $FKey => $FValue) {
                            setcookie($FKey, CH_FREE, time() - 3600, CH_ANTI_PATH);
                        }
                        $FResult = true;
                    } else $FResult = false;
                    break;
                case SOT_Request:
                    $_GET = [];
                    $_POST = [];
                    $FResult = true;
                    break;
            }
        }
        return (bool)$FResult;
    }

    public function All($AJSON = false) {
        $FResult = null;
        if ($this->isStarted()) {
            switch ($this->FType) {
                case SOT_Database:
                    $FResult = (new StrOf)->ToSQL($this->FObject, "SELECT * FROM " . $this->FTableName . ";", null, TSF_JSON);
                    break;
                case SOT_Dynamic: // session
                    $FResult = $_SESSION;
                    break;
                case SOT_File:
                    $FResult = [];
                    foreach ($_COOKIE as $FKey => $FValue) {
                        $FResult[$FKey] = (new ArrayOf)->FromJSON($FValue);
                    }
                    if (isset($FResult[$this->FSessionName])) unset($FResult[$this->FSessionName]);
                    break;
                case SOT_Request:
                    $FValue1 = null;
                    $FValue2 = null;
                    $FValue3 = null;
                    $FValue4 = null;
                    if (Request::isGet()) {
                        $FValue1 = Request::input('GET');
                        $FValue1 = $FValue1()->asArray();
                    }
                    if (Request::isPost()) {
                        $FValue2 = Request::input('POST');
                        $FValue2 = $FValue2()->asArray();
                    }
                    if (Request::isPut()) {
                        $FValue3 = Request::input('PUT');
                        $FValue3 = $FValue3()->asArray();
                    }
                    if (Request::isDelete()) {
                        $FValue4 = Request::input('DELETE');
                        $FValue4 = $FValue4()->asArray();
                    }
                    $FResult = (new ArrayOf)->Of(AO_Merge, $FValue1, $FValue2, $FValue3, $FValue4);
                    if (isset($FResult['_csrf'])) unset($FResult['_csrf']);
                    break;
            }
            if (isset($FResult) and ((new ArrayOf)->Length($FResult) < 1)) $FResult = null;
        }
        if ($AJSON and isset($FResult)) $FResult = (new ArrayOf)->ToJSON($FResult);
        return $FResult;
    }

}

/**
 * FakerOf helper
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 *
 */

class FakerOf {

    public $Faker;

    public function __construct() {
        $this->Faker = Faker\Factory::create();
    }

}