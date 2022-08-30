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
use ChrisKonnertz\StringCalc\StringCalc;

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
     * @return GraphOf
     */
    public static function GraphOf() {
        return new GraphOf();
    }

    /**
     * @return ColorOf
     */
    public static function ColorOf() {
        return new ColorOf();
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
const DTC_AssocArray = "DTC_AssocArray";
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
        } elseif ($AType == DTC_AssocArray) {
            if (is_array($AValue)) {
                $FKeys = array_keys($AValue);
                return array_keys($FKeys) !== $FKeys;
            } else return false;
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

    public function CopyCount($AValue, $ACount, $AInterval = CH_FREE) {
        $FResult = CH_FREE;
        if ($ACount > 0) {
            if ($ACount > 1) {
                for ($InX = 1; $InX < $ACount; $InX++) {
                    $FResult .= $AValue . $AInterval;
                }
            }
            $FResult .= $AValue;
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $ASearch
     * @param $AReplace
     * @param null $AParam
     * @return array|string|null
     */
    public function Replace($AValue, $ASearch, $AReplace, $AParam = null, $APerefix = null, $ACalc = true) {
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
        if (is_null($AValue)) $FResult = null;
        elseif (($AParam == SR_ArrayKeys) and is_array($AValue)) {
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
                        $FReplaceValue = $this->ReplaceExecute1($FValue, $FSearch, $FReplace, $APerefix, $ACalc);
                        if (is_null($FReplaceValue)) unset($FResult[$FKey]); else $FResult[$FKey] = $FReplaceValue;
                    }
                }
            } else $FResult = $this->ReplaceExecute1($AValue, $FSearch, $FReplace, $APerefix, $ACalc);
        }
        return $FResult;
    }

    /**
     * @param $AValue
     * @param $ASearch
     * @param $AReplace
     * @return string|null
     */
    private function ReplaceExecute1($AValue, $ASearch, $AReplace, $APerefix, $ACalc) {
        $FResult = $this->From($AValue);
        if (is_array($ASearch)) {
            foreach ($ASearch as $FKey => $FValue) {
                if (is_array($AReplace)) {
                    if (array_key_exists($FKey, $AReplace)) $this->ReplaceExecute2($FValue, $AReplace[$FKey], $FResult, $APerefix);
                } else $this->ReplaceExecute2($FValue, $AReplace, $FResult, $APerefix);
                if (is_null($FResult)) break;
            }
        } else $this->ReplaceExecute2($ASearch, $AReplace, $FResult, $APerefix);
        if ($ACalc) $FResult = (new ValueOf)->Calculate($FResult);
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
    public function Percent($AMin, $AMax, $ADefault = 100, $AMaxChunk = 100) {
        if ($AMax <> 0) return round(($AMin * $AMaxChunk) / $AMax); else return $ADefault;
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

    public function PhoneValidate($AValue, &$AResult, $AFormat = null) {
        // '/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/'
        // '/^[0-9]{4}-[0-9]{7}$/'
        // '/^[0-9]{11}+$/'

        $AResult = trim($AValue);
        if (is_null($AFormat)) {
            $AResult = filter_var($AResult, FILTER_SANITIZE_NUMBER_INT);
            $AResult = (new StrOf)->Replace($AResult, ['+', '-', '(', ')', ' '], CH_FREE);
            return ((new StrOf)->Length($AResult) == 9);
        } else return preg_match($AFormat, $AResult);
    }

    public function Calculate($AValue, $ADefault = null) {
        $FPosBegin = (new StrOf)->Pos($AValue, CH_BRACE_FIGURE_BEGIN);
        if ($FPosBegin > 0) {
            $FResult = $AValue;
            while ($FPosBegin > 0) {
                $FLen = (new StrOf)->Length($FResult);
                $FPosEnd = (new StrOf)->Pos($FResult, CH_BRACE_FIGURE_END, $FPosBegin);
                if ($FPosBegin <= $FPosEnd) {
                    $FCalc = trim((new StrOf)->Copy($FResult, $FPosBegin + 1, $FPosEnd - $FPosBegin - 1));
                    if (!empty($FCalc)) {
                        $FCalcNew = $this->Calculate($FCalc);
                        if (!(new StrOf)->Same($FCalc, $FCalcNew)) {
                            $FLenCalcNew = (new StrOf)->Length($FCalcNew);
                            $FResult = (new StrOf)->Copy($FResult, 1, $FPosBegin - 1) . $FCalcNew . (new StrOf)->Copy($FResult, $FPosEnd + 1, $FLen - $FPosEnd);
                            $FPosEnd = $FPosBegin + $FLenCalcNew - 1;
                        }
                    }
                    $FPosBegin = (new StrOf)->Pos($FResult, CH_BRACE_FIGURE_BEGIN, $FPosEnd);
                } else break;
            }
            return $FResult;
        } else {
            $stringCalc = new StringCalc();
            try {
                $FResult = $stringCalc->calculate($AValue);
            } catch (\Exception $err) {
                if (is_null($ADefault)) $FResult = $AValue;
                elseif ($ADefault == 'err') $FResult = $err->getMessage(); else $FResult = $ADefault;
            }
            return $FResult;
        }
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
const AA_FromJson = "AA_FromJson";
const AA_FromArray = "AA_FromArray";
const AA_Replace = "AA_Replace";
const AA_DateTimeFormat = "AA_DateTimeFormat";
const AA_ValidatePhone = "AA_ValidatePhone";
const AA_ValidateFullName = "AA_ValidateFullName";

// Const Array Validate Param
const AVP_KeysAND = "AVP_KeysAND";
const AVP_KeysOR = "AVP_KeysOR";

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

    public function ToJSONArr($AValue, $ASubJSON = false, $AForce = true) {
        if (is_array($AValue)) {
            $FResult = CH_FREE;
            foreach ($AValue as $FValue) {
                $FResult .= $this->ToJSON($FValue, $ASubJSON, $AForce) . CH_COMMA;
            }
            if ($FResult == CH_FREE) return '[{}]'; else {
                $FResult = rtrim($FResult, CH_COMMA);
                return CH_BRACE_SQR_BEGIN . $FResult . CH_BRACE_SQR_END;
            }
        } else return $this->ToJSON($AValue, $ASubJSON, $AForce);
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
        if (!empty($FResult) and !$this->Empty($AParam) and isset($AParam['action']) and isset($AParam['name'])) {
            $FAction = $AParam['action'];
            $FName = $AParam['name'];
            $FShow = (new DefaultOf)->ValueCheck($AParam['show'] ?? null, $FName);
            if ($FName == CH_STAR) {
                switch ($FAction) {
                    case AA_Trim:
                        $FLength = (new DefaultOf)->ValueCheck($AParam['length'] ?? null, 0);
                        $FFile = (new DefaultOf)->ValueCheck($AParam['file'] ?? null, false);
                        if (is_array($FResult)) {
                            foreach ($FResult as $FKey => $FValue) {
                                if ($FLength > 0) {
                                    if ($FFile) $FResult[$FKey] = (new SystemOf)->FileShorten($FValue, $FLength); else $FResult[$FKey] = (new StrOf)->Copy(trim($FValue), 1, $FLength, false, CH_POINT_THREE);
                                    $FResult[$FKey] = trim($FResult[$FKey]);
                                } else $FResult[$FKey] = trim($FValue);
                            }
                        } else {
                            if ($FLength > 0) {
                                if ($FFile) $FResult = (new SystemOf)->FileShorten($FResult, $FLength); else $FResult = (new StrOf)->Copy(trim($FResult), 1, $FLength, false, CH_POINT_THREE);
                                $FResult = trim($FResult);
                            } else $FResult = trim($FResult);
                        }
                        break;
                    case AA_ToValue:
                        $FDecimal = (new DefaultOf)->ValueCheck($AParam['decimal'] ?? null, 2);
                        $FThousand = (new DefaultOf)->ValueCheck($AParam['thousand'] ?? null, CH_FREE);
                        if (is_array($FResult)) {
                            foreach ($FResult as $FKey => $FValue) {
                                $FResult[$FKey] = (new DefaultOf)->ValueFromString($FValue, $FDecimal, $FThousand);
                            }
                        } else {
                            $FResult = (new DefaultOf)->ValueFromString($FResult, $FDecimal, $FThousand);
                        }
                        break;
                    case AA_ToArray:
                        $FSeparator = (new DefaultOf)->ValueCheck($AParam['separator'] ?? null, CH_COMMA);
                        if (is_array($FResult)) {
                            foreach ($FResult as $FKey => $FValue) {
                                if ($this->FromString($FValue, $FSeparator, $FSubResult) > 0) {
                                    foreach ($FSubResult as $FSubKey => $FSubValue) {
                                        $FResult[$FKey . CH_BRACE_SQR_BEGIN . ($FSubKey + 1) . CH_BRACE_SQR_END] = $FSubValue;
                                    }
                                }
                            }
                        } else {
                            if ($this->FromString($FResult, $FSeparator, $FSubResult) > 0) {
                                foreach ($FSubResult as $FSubKey => $FSubValue) {
                                    $FResult[$FResult . CH_BRACE_SQR_BEGIN . ($FSubKey + 1) . CH_BRACE_SQR_END] = $FSubValue;
                                }
                            }
                        }
                        break;
                }
            } else {
                switch ($FAction) {
                    case AA_Trim:
                        $FLength = (new DefaultOf)->ValueCheck($AParam['length'] ?? null, 0);
                        $FFile = (new DefaultOf)->ValueCheck($AParam['file'] ?? null, false);
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName])) {
                                if ($FLength > 0) {
                                    if ($FFile) $FResult[$FShow] = (new SystemOf)->FileShorten($FResult[$FName], $FLength); else $FResult[$FShow] = (new StrOf)->Copy(trim($FResult[$FName]), 1, $FLength, false, CH_POINT_THREE);
                                    $FResult[$FShow] = trim($FResult[$FShow]);
                                } else $FResult[$FShow] = trim($FResult[$FName]);
                            }
                        } else {
                            if ($FLength > 0) $FResult = trim((new StrOf)->Copy(trim($FResult), 1, $FLength, false, CH_POINT_THREE)); else $FResult = trim($FResult);
                        }
                        break;
                    case AA_ToValue:
                        $FDecimal = (new DefaultOf)->ValueCheck($AParam['decimal'] ?? null, 2);
                        $FThousand = (new DefaultOf)->ValueCheck($AParam['thousand'] ?? null, CH_FREE);
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName])) {
                                $FResult[$FShow] = (new DefaultOf)->ValueFromString($FResult[$FName], $FDecimal, $FThousand);
                            }
                        } else {
                            $FResult = (new DefaultOf)->ValueFromString($FResult, $FDecimal, $FThousand);
                        }
                        break;
                    case AA_ToArray:
                        $FSeparator = (new DefaultOf)->ValueCheck($AParam['separator'] ?? null, CH_COMMA);
                        $FDefault = (new DefaultOf)->ValueCheck($AParam['default'] ?? null, null);
                        $FFormat = (new DefaultOf)->ValueCheck($AParam['format'] ?? null, '%s');
                        $FMultiple = (new DefaultOf)->ValueCheck($AParam['multiple'] ?? null, false);
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName]) and ($this->FromString($FResult[$FName], $FSeparator, $FSubResult) > 0)) {
                                if ($FMultiple) {
                                    $FFormat = (new StrOf)->Replace($FFormat, '[count]', count($FSubResult));
                                    $FResult[$FShow] = (new ArrayOf)->FromFormat($FSubResult, $FFormat, $FSubValue, $FDefault);
                                } else {
                                    foreach ($FSubResult as $FSubKey => $FSubValue) {
                                        $FResult[$FShow . CH_BRACE_SQR_BEGIN . ($FSubKey + 1) . CH_BRACE_SQR_END] = (new StrOf)->Replace($FFormat, ['%s', '$value', '[value]'], $FSubValue);
                                    }
                                    unset($FResult[$FName]);
                                }
                            } elseif ($FMultiple) $FResult[$FShow] = $FDefault;
                        } else {
                            if ($this->FromString($FResult, $FSeparator, $FSubResult) > 0) {
                                foreach ($FSubResult as $FSubKey => $FSubValue) {
                                    $FResult[$FResult . CH_BRACE_SQR_BEGIN . ($FSubKey + 1) . CH_BRACE_SQR_END] = (new StrOf)->Replace($FFormat, ['%s', '$value', '[value]'], $FSubValue);
                                }
                            }
                        }
                        break;
                    case AA_Ternary:
                        $FValue1 = (new DefaultOf)->ValueCheck($AParam['value1'] ?? null, null);
                        $FValue2 = (new DefaultOf)->ValueCheck($AParam['value2'] ?? null, null);
                        $FTrue = (new DefaultOf)->ValueCheck($AParam['true'] ?? null, null);
                        $FFalse = (new DefaultOf)->ValueCheck($AParam['false'] ?? null, null);
                        $FOperator = (new DefaultOf)->ValueCheck($AParam['operator'] ?? null, null);
                        if (is_array($FFalse)) $FFalse = $this->First($FFalse);
                        if (is_array($FResult)) {
                            $FResult[$FShow] = $this->FromActionExecute1($FValue1, $FValue2, $FTrue, $FFalse, array_keys($FResult), array_values($FResult), $FOperator);
                        } else {
                            $FResult = $this->FromActionExecute1($FValue1, $FValue2, $FTrue, $FFalse, ['$value', '[value]'], $FResult, $FOperator);
                        }
                        break;
                    case AA_FromJson:
                        $FFormat = (new DefaultOf)->ValueCheck($AParam['format'] ?? null, null);
                        $FDefault = (new DefaultOf)->ValueCheck($AParam['default'] ?? null, null);
                        $FInterval = (new DefaultOf)->ValueCheck($AParam['interval'] ?? null, null);
                        $FDublicate = (new DefaultOf)->ValueCheck($AParam['dublicate'] ?? null, false);
                        $FMultiple = (new DefaultOf)->ValueCheck($AParam['multiple'] ?? null, false);
                        if (is_array($FResult) and isset($FFormat)) {
                            if (isset($FResult[$FName])) {
                                $FValue = $this->FromJSON($FResult[$FName]);
                                if ($FDublicate) $FValue = $this->DublicateRemove($FValue);
                                if ($FMultiple and !(new DefaultOf)->TypeCheck($FValue, DTC_MultiArray)) $FValue = [$FValue];
                                if (is_array($FValue)) $FResult[$FShow] = $this->FromFormat($FValue, $FFormat, $FSubResult, $FDefault, $FInterval);
                            }
                        }
                        break;
                    case AA_FromArray:
                        $FNumber = (new DefaultOf)->ValueCheck($AParam['number'] ?? null, 1);
                        $FKey = (new DefaultOf)->ValueCheck($AParam['key'] ?? null, null);
                        $FDefault = (new DefaultOf)->ValueCheck($AParam['default'] ?? null, null);
                        $FSub = (new DefaultOf)->ValueCheck($AParam['sub'] ?? null, $FNumber == 1);
                        $FPath = (new DefaultOf)->ValueCheck($AParam['path'] ?? null, null);
                        $FFirst = (new DefaultOf)->ValueCheck($AParam['first'] ?? null, false);
                        $FMultiple = (new DefaultOf)->ValueCheck($AParam['multiple'] ?? null, false);
                        $FSeparator = (new DefaultOf)->ValueCheck($AParam['separator'] ?? null, CH_POINT);
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName])) {
                                $FValue = $FResult[$FName];
                                if (!is_array($FValue)) $FValue = $this->FromJSON($FValue);
                                if (is_array($FValue)) {
                                    if ($FMultiple and !(new DefaultOf)->TypeCheck($FValue, DTC_MultiArray)) $FValue = [$FValue];
                                    if ($FFirst) $FValue = $this->First($FValue, isset($FKey) or isset($FPath));
                                    if (isset($FPath)) $FValue = $this->PathGet($FValue, $FPath, $FDefault, $FSeparator); else {
                                        $FValue = $this->Value($FValue, $FNumber, $FSub);
                                        if (is_array($FValue) and isset($FKey) and isset($FValue[$FKey])) $FValue = $FValue[$FKey];
                                        if (is_null($FValue)) $FValue = $FDefault;
                                    }
                                    $FResult[$FShow] = $FValue;
                                }
                            }
                        }
                        break;
                    case AA_Replace:
                        $FReplace = (new DefaultOf)->ValueCheck($AParam['value'] ?? null, null);
                        if (is_array($FResult) and isset($FReplace)) {
                            if (isset($FResult[$FName])) {
                                if (is_array($FReplace)) {
                                    $FSubResult = $FResult[$FName];
                                    $FReplaceKey = array_keys($FResult);
                                    $FReplaceValue = array_values($FResult);
                                    foreach ($FReplace as $FKey => $FValue) {
                                        $FSubResult = (new StrOf)->Replace($FSubResult, (new StrOf)->Replace($FKey, $FReplaceKey, $FReplaceValue), (new StrOf)->Replace($FValue, $FReplaceKey, $FReplaceValue));
                                    }
                                    $FResult[$FShow] = $FSubResult;
                                } else $FResult[$FShow] = $FReplace;
                            }
                        }
                        break;
                    case AA_DateTimeFormat:
                        $FFormat = (new DefaultOf)->ValueCheck($AParam['format'] ?? null, 'd.m.Y H:i:s');
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName])) {
                                $FResult[$FShow] = (new DateTimeOf)->Format($FResult[$FName], $FFormat);
                            }
                        } else {
                            $FResult = (new DateTimeOf)->Format($FResult, $FFormat);
                        }
                        break;
                    case AA_ValidatePhone:
                        $FFormat = (new DefaultOf)->ValueCheck($AParam['format'] ?? null, null);
                        $FDefault = (new DefaultOf)->ValueCheck($AParam['default'] ?? null, null);
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName])) {
                                if ((new ValueOf)->PhoneValidate($FResult[$FName], $FValue, $FFormat)) $FResult[$FShow] = $FValue; else $FResult[$FShow] = $FDefault;
                            }
                        } else {
                            if ((new ValueOf)->PhoneValidate($FResult, $FValue, $FFormat)) $FResult = $FValue; else $FResult = $FDefault;
                        }
                        break;
                    case AA_ValidateFullName:
                        $FDefault = (new DefaultOf)->ValueCheck($AParam['default'] ?? null, null);
                        if (is_array($FResult)) {
                            if (isset($FResult[$FName])) {
                                if ((new StrOf)->FormatFromUserData($FResult[$FName], SFFUD_FullName, $FValue)) $FResult[$FShow] = $FValue; else $FResult[$FShow] = $FDefault;
                            }
                        } else {
                            if ((new StrOf)->FormatFromUserData($FResult[$FName], SFFUD_FullName, $FValue)) $FResult = $FValue; else $FResult = $FDefault;
                        }
                        break;
                }
            }
        }
        return $FResult;
    }

    private function FromActionExecute1($AValue1, $AValue2, $ATrue, $AFalse, $AReplaceKeys, $AReplaceValues, $AOperator) {
        if (is_array($AValue1) and is_array($AValue2) and is_array($ATrue)) {
            foreach ($AValue1 as $FKey => $FValue) {
                $FResult = $this->FromActionExecute1($FValue, $AValue2[$FKey], $ATrue[$FKey], null, $AReplaceKeys, $AReplaceValues, $AOperator);
                if (isset($FResult)) return $FResult;
            }
            return (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues);
        } elseif (is_array($AValue1) and is_array($ATrue)) {
            foreach ($AValue1 as $FKey => $FValue) {
                $FResult = $this->FromActionExecute1($FValue, $AValue2, $ATrue[$FKey], null, $AReplaceKeys, $AReplaceValues, $AOperator);
                if (isset($FResult)) return $FResult;
            }
            return (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues);
        } elseif (is_array($AValue2) and is_array($ATrue)) {
            foreach ($AValue2 as $FKey => $FValue) {
                $FResult = $this->FromActionExecute1($AValue1, $FValue, $ATrue[$FKey], null, $AReplaceKeys, $AReplaceValues, $AOperator);
                if (isset($FResult)) return $FResult;
            }
            return (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues);
        } elseif (is_array($AValue1)) {
            foreach ($AValue1 as $FValue) {
                $FResult = $this->FromActionExecute1($FValue, $AValue2, $ATrue, null, $AReplaceKeys, $AReplaceValues, $AOperator);
                if (isset($FResult)) return $FResult;
            }
            return (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues);
        } elseif (is_array($AValue2)) {
            foreach ($AValue2 as $FValue) {
                $FResult = $this->FromActionExecute1($AValue1, $FValue, $ATrue, null, $AReplaceKeys, $AReplaceValues, $AOperator);
                if (isset($FResult)) return $FResult;
            }
            return (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues);
        } else {
            if (isset($AValue1) or isset($AValue2)) {
                if (isset($AValue1)) $FValue1 = (new StrOf)->Replace($AValue1, $AReplaceKeys, $AReplaceValues); else $FValue1 = null;
                if (isset($AValue2)) $FValue2 = (new StrOf)->Replace($AValue2, $AReplaceKeys, $AReplaceValues); else $FValue2 = null;
                if (isset($ATrue)) $FTrue = (new StrOf)->Replace($ATrue, $AReplaceKeys, $AReplaceValues); else $FTrue = null;
                if (isset($AFalse)) $FFalse = (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues); else $FFalse = null;
                switch ($AOperator) {
                    case '=':
                    case '==':
                        return (($FValue1 == $FValue2) ? $FTrue : $FFalse);
                    case '===':
                        return (($FValue1 === $FValue2) ? $FTrue : $FFalse);
                    case '!=':
                    case '<>':
                        return (($FValue1 != $FValue2) ? $FTrue : $FFalse);
                    case '!==':
                        return (($FValue1 !== $FValue2) ? $FTrue : $FFalse);
                    case '>':
                        return (($FValue1 > $FValue2) ? $FTrue : $FFalse);
                    case '>=':
                        return (($FValue1 >= $FValue2) ? $FTrue : $FFalse);
                    case '<':
                        return (($FValue1 < $FValue2) ? $FTrue : $FFalse);
                    case '<=':
                        return (($FValue1 <= $FValue2) ? $FTrue : $FFalse);
                    default:
                        if ((new StrOf)->Same($FValue1, 'null')) return (is_null($FValue2) or empty($FValue2)) ? $FTrue : $FFalse;
                        elseif ((new StrOf)->Same($FValue2, 'null')) return (is_null($FValue1) or empty($FValue1)) ? $FTrue : $FFalse; else return ((new StrOf)->Same($FValue1, $FValue2) ? $FTrue : $FFalse);
                }
            } else return (new StrOf)->Replace($AFalse, $AReplaceKeys, $AReplaceValues);
        }
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
        if (!$this->Empty($AResult) and !empty($AFormat)) {
            $FResult = CH_FREE;
            $FKeys = null;
            $FLength = (new ArrayOf)->Length($AResult);
            $FCount = 0;
            foreach ($AResult as $FKey => $FValue) {
                $FCount++;
                if (is_array($FValue)) {
                    if (!$AFixedKey or is_null($FKeys)) $FKeys = array_keys($FValue);
                    $AResult[$FKey] = (new StrOf)->Replace($this->FromFormatExecute1($FCount, $AFormat), $FKeys, array_values($FValue));
                } else {
                    $AResult[$FKey] = (new StrOf)->Replace($this->FromFormatExecute1($FCount, $AFormat), ['$value', '[value]', '%s'], $FValue);
                }
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
        return $FResult;
    }

    private function FromFormatExecute1($ACount, $AFormat){
        $FResult = $AFormat;
        if (is_array($AFormat)) {
            $FFound = true;
            if (isset($AFormat[$ACount])) $FResult = $AFormat[$ACount]; else {
                if (($ACount == 1) and isset($AFormat['first'])) $FResult = $AFormat['first'];
                elseif (($ACount == 2) and isset($AFormat['second'])) $FResult = $AFormat['second'];
                elseif ($ACount % 2 == 0) {
                    if (isset($AFormat['even'])) $FResult = $AFormat['even'];
                    elseif (isset($AFormat['unodd'])) $FResult = $AFormat['unodd']; else $FFound = false;
                } else {
                    if (isset($AFormat['odd'])) $FResult = $AFormat['odd'];
                    elseif (isset($AFormat['uneven'])) $FResult = $AFormat['uneven']; else $FFound = false;
                }
            }
            if (!$FFound) {
                if (isset($AFormat['other'])) $FResult = $AFormat['other'];
                elseif (isset($AFormat['all'])) $FResult = $AFormat['all'];
            }
        }
        return $FResult;
    }

    public function Search($AValues, $ASearch, $AGetPath = false) {
        if (is_array($ASearch)) {
            foreach ($ASearch as $FKey => $FValue) {
                if (key_exists($FKey, $AValues) and !is_array($AValues[$FKey]) and (new StrOf)->Same($FValue, $AValues[$FKey])) {
                    return ($AGetPath) ? [$FKey] : $AValues;
                }
            }
            foreach ($AValues as $FKey => $FValue) {
                if (is_array($FValue)) {
                    $FResult = $this->Search($FValue, $ASearch, $AGetPath);
                    if ($FResult) {
                        return ($AGetPath) ? array_merge([$FKey], $FResult) : $FResult;
                    }
                }
            }
        } else {
            foreach ($AValues as $FKey => $FValue) {
                if (is_array($FValue)) {
                    $FResult = $this->Search($FValue, $ASearch, $AGetPath);
                    if ($FResult) {
                        return ($AGetPath) ? array_merge([$FKey], $FResult) : $FResult;
                    }
                } elseif ((new StrOf)->Same($FValue, $ASearch)) {
                    return ($AGetPath) ? [$FKey] : $AValues;
                }
            }
        }
        return false;
    }

    public function DublicateRemove($AValue) {
        if (is_array($AValue)) {
            $FSerialized = array_map('serialize', $AValue);
            $FUnique = array_unique($FSerialized);
            return array_intersect_key($AValue, $FUnique);
        } else return $AValue;
    }

    public function CopyWithKey($AValues, $AKeys, $AReverse = false, $AIfNotAdd = true) {
        if (is_array($AValues) and is_array($AKeys)) {
            if ($AReverse) {
                $FResult = $AValues;
                foreach ($AKeys as $FKey => $FValue) {
                    if (isset($FResult[$FValue])) unset($FResult[$FValue]);
                    elseif ($AIfNotAdd) $FResult[$FKey] = $FValue;
                }
            } else {
                $FResult = [];
                foreach ($AKeys as $FKey => $FValue) {
                    if (isset($AValues[$FValue])) $FResult[$FValue] = $AValues[$FValue];
                    elseif ($AIfNotAdd) $FResult[$FKey] = $FValue;
                }
            }
            return $FResult;
        } else return $AValues;
    }

    public function Validate($AValues, $AKeys, &$AResult, $AParam = null) {
        $FResult = false;
        $AResult = null;
        if (!$this->Empty($AValues)) {
            $FResult = true;
            if (($AParam == AVP_KeysAND) or ($AParam == AVP_KeysOR)) {
                if (!$this->Empty($AKeys)) {
                    foreach ($AKeys as $FKey => $FKeyValue) {
                        if ((is_string($FKeyValue) or is_int($FKeyValue)) and array_key_exists($FKeyValue, $AValues)) {
                            $FValue = $AValues[$FKeyValue];
                            if (is_null($FValue) or (is_string($FValue) and (new StrOf)->Empty($FValue))) {
                                $FResult = false;
                            } elseif (!isset($AResult[$FKeyValue])) {
                                $AResult[$FKeyValue] = $FValue;
                            }
                        } elseif ((is_string($FKey) or is_int($FKey)) and array_key_exists($FKey, $AValues)) {
                            $FValue = $AValues[$FKey];
                            if (is_null($FValue) or (is_string($FValue) and (new StrOf)->Empty($FValue))) {
                                if (is_null($FKeyValue) or (is_string($FKeyValue) and (new StrOf)->Empty($FKeyValue))) {
                                    $FResult = false;
                                } elseif (!isset($AResult[$FKey]) and !is_array($FKeyValue)) {
                                    $AResult[$FKey] = $FKeyValue;
                                }
                            } elseif (!isset($AResult[$FKey])) {
                                $AResult[$FKey] = $FValue;
                            }
                        }
                    }
                    if (!$FResult and ($AParam == AVP_KeysOR)) $FResult = !is_null($AResult);
                } else $FResult = false;
            } else {
                foreach ($AValues as $FKey => $FValue) {
                    if (is_null($FValue) or (is_string($FValue) and (new StrOf)->Empty($FValue))) {
                        if ($FResult and (is_null($AKeys) or in_array($FKey, $AKeys))) $FResult = false;
                    } elseif (!isset($AResult[$FKey])) {
                        $AResult[$FKey] = $FValue;
                    }
                }
            }
            if (!$this->Empty($AKeys)) {
                foreach ($AKeys as $FKey => $FValue) {
                    if (!is_null($FValue) and !is_array($FValue) and (!is_string($FValue) or !(new StrOf)->Empty($FValue)) and (is_string($FKey) or (!is_string($FValue) and !is_int($FValue)) or !array_key_exists($FValue, $AValues)) and (is_null($AResult) or !array_key_exists($FKey, $AResult))) {
                        $AResult[$FKey] = $FValue;
                    }
                }
                // Check Action
                foreach ($AKeys as $FKey => $FValue) {
                    if (is_array($FValue)) {
                        $FParam = $FValue;
                        if (!isset($FParam['name'])) $FParam['name'] = $FKey;
                        if (!isset($FParam['show'])) $FParam['show'] = $FKey;
                        if (isset($AResult[$FParam['name']])) $AResult = $this->FromAction($AResult, $FParam);
                    }
                }
//                $AResult = (new StrOf)->Replace($AResult, array_keys($AResult), array_values($AResult));
                // Check All Keys
                if ($FResult and ($AParam == AVP_KeysAND) and is_array($AResult)) {
                    foreach ($AKeys as $FKey => $FValue) {
                        if (is_string($FKey)) $FKeyValue = $FKey;
                        elseif (is_string($FValue) or is_int($FValue)) $FKeyValue = $FValue;
                        else $FKeyValue = null;
                        if (isset($FKeyValue) and !isset($AResult[$FKeyValue])) {
                            $FResult = false;
                            break;
                        }
                    }
                }
            }
        }
        return $FResult and !$this->Empty($AResult);
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

    public function Format($ADateTime, $AFormat = "d.m.Y H:i:s") {
        if (!empty($ADateTime) and !empty($AFormat)) return date($AFormat, strtotime($ADateTime)); else return null;
    }

}

/**
 * ColorOf
 *
 * @category  Class
 * @package   Utility
 * @author    Chirag Mehta
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class ColorOf {

    public function __construct(){
        $color = null;
        $rgb = null;
        $hsl = null;

        for($i = 0; $i < count($this->names); $i++)
        {
            $color = "#" . $this->names[$i][0];
            $rgb = $this->rgb($color);
            $hsl = $this->hsl($color);

            array_push(
                $this->names[$i],
                $rgb[0],
                $rgb[1],
                $rgb[2],
                $hsl[0],
                $hsl[1],
                $hsl[2]
            );
        }
    }

    public function name($color){
        $color = strtoupper($color);

        if(strlen($color) < 3 || strlen($color) > 7){
            return array(
                "hex" => "#000000",
                "name" => "Invalid Color: " . $color,
                "exact" => false
            );
        }

        // If given the format without #
        if(strlen($color) % 3 == 0){
            $color = "#" . $color;
        }

        // If given #fea, duplicate every char e.g #ffeeaa
        if(strlen($color) == 4){
            $color = "#" . substr($color, 1, 1) . substr($color, 1, 1) . substr($color, 2, 1) . substr($color, 2, 1) . substr($color, 3, 1) . substr($color, 3, 1);
        }

        $rgb = $this->rgb($color);

        $r = $rgb[0];
        $g = $rgb[1];
        $b = $rgb[2];

        $hsl = $this->hsl($color);

        $h = $hsl[0];
        $s = $hsl[1];
        $l = $hsl[2];

        $ndf1 = 0;
        $ndf2 = 0;
        $ndf = 0;

        $cl = -1;
        $df = -1;

        for($i = 0; $i < count($this->names); $i++)
        {
            if($color == "#" . $this->names[$i][0]){
                return array(
                    "hex" => "#" . $this->names[$i][0],
                    "name" => $this->names[$i][1],
                    "exact" => true
                );
            }

            $ndf1 = pow($r - $this->names[$i][2], 2) + pow($g - $this->names[$i][3], 2) + pow($b - $this->names[$i][4], 2);
            $ndf2 = pow($h - $this->names[$i][5], 2) + pow($s - $this->names[$i][6], 2) + pow($l - $this->names[$i][7], 2);
            $ndf = $ndf1 + $ndf2 * 2;

            if($df < 0 || $df > $ndf)
            {
                $df = $ndf;
                $cl = $i;
            }
        }

        if($cl < 0){
            return array(
                "hex" => "#000000",
                "name" => "Invalid Color: " . $color,
                "exact" => false
            );
        }else{
            return array(
                "hex" => "#" . $this->names[$cl][0],
                "name" => $this->names[$cl][1],
                "exact" => false
            );
        }
    }

    public function hsl($color) {

        $rgb = $this->rgb($color);

        $rgb = array(
            intval($rgb[0]) / 255,
            intval($rgb[1]) / 255,
            intval($rgb[2]) / 255
        );

        $min = null;
        $max = null;
        $delta = null;
        $h = null;
        $s = null;
        $l = null;

        $r = $rgb[0];
        $g = $rgb[1];
        $b = $rgb[2];

        $min = min($r, min($g, $b));
        $max = max($r, max($g, $b));
        $delta = $max - $min;
        $l = ($min + $max) / 2;

        $s = 0;
        if($l > 0 && $l < 1)
            $s = $delta / ($l < 0.5 ? (2 * $l) : (2 - 2 * $l));

        $h = 0;
        if($delta > 0)
        {
            if ($max == $r && $max != $g) $h += ($g - $b) / $delta;
            if ($max == $g && $max != $b) $h += (2 + ($b - $r) / $delta);
            if ($max == $b && $max != $r) $h += (4 + ($r - $g) / $delta);
            $h /= 6;
        }

        return array(
            intval($h * 255),
            intval($s * 255),
            intval($l * 255)
        );
    }

    public function rgb($color) {

        $color = str_replace("#", "", $color);

        if (strlen($color) == 3) {
            $r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
            $g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
            $b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
        } else {
            $r = hexdec(substr($color, 0, 2));
            $g = hexdec(substr($color, 2, 2));
            $b = hexdec(substr($color, 4, 7));
        }

        return array($r, $g, $b);
    }

    public function info($color, $exact = true) {
        $found = (new ArrayOf)->Search($this->names, [0 => $color, 1 => $color]);
        if (!$found and !$exact) $found = (new ArrayOf)->Search($this->names, $color);
        $exact = true;
        if ($found) {
            $name = $found[1];
            $hex = $found[0];
        } elseif (preg_match('/^#[a-f0-9]{6}$/i', $color) or preg_match('/^[a-f0-9]{6}$/i', $color)) {
            $name = 'Invalid Color: ' . $color;
            $hex = $color;
        } else {
            $found = $this->name($color);
            $name = $found['name'];
            $hex = $found['hex'];
            $exact = $found['exact'];
        }
        $hex = CH_NET . strtolower(ltrim($hex, CH_NET));
        return ['name' => strtolower($name), 'hex' => $hex, 'rgb' => $this->rgb($hex), 'hsl' => $this->hsl($hex), 'exact' => $exact];
    }

    public $names = [
        ["000000", "Black"],
        ["000080", "Navy Blue"],
        ["0000C8", "Dark Blue"],
        ["0000FF", "Blue"],
        ["000741", "Stratos"],
        ["001B1C", "Swamp"],
        ["002387", "Resolution Blue"],
        ["002900", "Deep Fir"],
        ["002E20", "Burnham"],
        ["002FA7", "International Klein Blue"],
        ["003153", "Prussian Blue"],
        ["003366", "Midnight Blue"],
        ["003399", "Smalt"],
        ["003532", "Deep Teal"],
        ["003E40", "Cyprus"],
        ["004620", "Kaitoke Green"],
        ["0047AB", "Cobalt"],
        ["004816", "Crusoe"],
        ["004950", "Sherpa Blue"],
        ["0056A7", "Endeavour"],
        ["00581A", "Camarone"],
        ["0066CC", "Science Blue"],
        ["0066FF", "Blue Ribbon"],
        ["00755E", "Tropical Rain Forest"],
        ["0076A3", "Allports"],
        ["007BA7", "Deep Cerulean"],
        ["007EC7", "Lochmara"],
        ["007FFF", "Azure Radiance"],
        ["008080", "Teal"],
        ["0095B6", "Bondi Blue"],
        ["009DC4", "Pacific Blue"],
        ["00A693", "Persian Green"],
        ["00A86B", "Jade"],
        ["00CC99", "Caribbean Green"],
        ["00CCCC", "Robin's Egg Blue"],
        ["00FF00", "Green"],
        ["00FF7F", "Spring Green"],
        ["00FFFF", "Cyan / Aqua"],
        ["010D1A", "Blue Charcoal"],
        ["011635", "Midnight"],
        ["011D13", "Holly"],
        ["012731", "Daintree"],
        ["01361C", "Cardin Green"],
        ["01371A", "County Green"],
        ["013E62", "Astronaut Blue"],
        ["013F6A", "Regal Blue"],
        ["014B43", "Aqua Deep"],
        ["015E85", "Orient"],
        ["016162", "Blue Stone"],
        ["016D39", "Fun Green"],
        ["01796F", "Pine Green"],
        ["017987", "Blue Lagoon"],
        ["01826B", "Deep Sea"],
        ["01A368", "Green Haze"],
        ["022D15", "English Holly"],
        ["02402C", "Sherwood Green"],
        ["02478E", "Congress Blue"],
        ["024E46", "Evening Sea"],
        ["026395", "Bahama Blue"],
        ["02866F", "Observatory"],
        ["02A4D3", "Cerulean"],
        ["03163C", "Tangaroa"],
        ["032B52", "Green Vogue"],
        ["036A6E", "Mosque"],
        ["041004", "Midnight Moss"],
        ["041322", "Black Pearl"],
        ["042E4C", "Blue Whale"],
        ["044022", "Zuccini"],
        ["044259", "Teal Blue"],
        ["051040", "Deep Cove"],
        ["051657", "Gulf Blue"],
        ["055989", "Venice Blue"],
        ["056F57", "Watercourse"],
        ["062A78", "Catalina Blue"],
        ["063537", "Tiber"],
        ["069B81", "Gossamer"],
        ["06A189", "Niagara"],
        ["073A50", "Tarawera"],
        ["080110", "Jaguar"],
        ["081910", "Black Bean"],
        ["082567", "Deep Sapphire"],
        ["088370", "Elf Green"],
        ["08E8DE", "Bright Turquoise"],
        ["092256", "Downriver"],
        ["09230F", "Palm Green"],
        ["09255D", "Madison"],
        ["093624", "Bottle Green"],
        ["095859", "Deep Sea Green"],
        ["097F4B", "Salem"],
        ["0A001C", "Black Russian"],
        ["0A480D", "Dark Fern"],
        ["0A6906", "Japanese Laurel"],
        ["0A6F75", "Atoll"],
        ["0B0B0B", "Cod Gray"],
        ["0B0F08", "Marshland"],
        ["0B1107", "Gordons Green"],
        ["0B1304", "Black Forest"],
        ["0B6207", "San Felix"],
        ["0BDA51", "Malachite"],
        ["0C0B1D", "Ebony"],
        ["0C0D0F", "Woodsmoke"],
        ["0C1911", "Racing Green"],
        ["0C7A79", "Surfie Green"],
        ["0C8990", "Blue Chill"],
        ["0D0332", "Black Rock"],
        ["0D1117", "Bunker"],
        ["0D1C19", "Aztec"],
        ["0D2E1C", "Bush"],
        ["0E0E18", "Cinder"],
        ["0E2A30", "Firefly"],
        ["0F2D9E", "Torea Bay"],
        ["10121D", "Vulcan"],
        ["101405", "Green Waterloo"],
        ["105852", "Eden"],
        ["110C6C", "Arapawa"],
        ["120A8F", "Ultramarine"],
        ["123447", "Elephant"],
        ["126B40", "Jewel"],
        ["130000", "Diesel"],
        ["130A06", "Asphalt"],
        ["13264D", "Blue Zodiac"],
        ["134F19", "Parsley"],
        ["140600", "Nero"],
        ["1450AA", "Tory Blue"],
        ["151F4C", "Bunting"],
        ["1560BD", "Denim"],
        ["15736B", "Genoa"],
        ["161928", "Mirage"],
        ["161D10", "Hunter Green"],
        ["162A40", "Big Stone"],
        ["163222", "Celtic"],
        ["16322C", "Timber Green"],
        ["163531", "Gable Green"],
        ["171F04", "Pine Tree"],
        ["175579", "Chathams Blue"],
        ["182D09", "Deep Forest Green"],
        ["18587A", "Blumine"],
        ["19330E", "Palm Leaf"],
        ["193751", "Nile Blue"],
        ["1959A8", "Fun Blue"],
        ["1A1A68", "Lucky Point"],
        ["1AB385", "Mountain Meadow"],
        ["1B0245", "Tolopea"],
        ["1B1035", "Haiti"],
        ["1B127B", "Deep Koamaru"],
        ["1B1404", "Acadia"],
        ["1B2F11", "Seaweed"],
        ["1B3162", "Biscay"],
        ["1B659D", "Matisse"],
        ["1C1208", "Crowshead"],
        ["1C1E13", "Rangoon Green"],
        ["1C39BB", "Persian Blue"],
        ["1C402E", "Everglade"],
        ["1C7C7D", "Elm"],
        ["1D6142", "Green Pea"],
        ["1E0F04", "Creole"],
        ["1E1609", "Karaka"],
        ["1E1708", "El Paso"],
        ["1E385B", "Cello"],
        ["1E433C", "Te Papa Green"],
        ["1E90FF", "Dodger Blue"],
        ["1E9AB0", "Eastern Blue"],
        ["1F120F", "Night Rider"],
        ["1FC2C2", "Java"],
        ["20208D", "Jacksons Purple"],
        ["202E54", "Cloud Burst"],
        ["204852", "Blue Dianne"],
        ["211A0E", "Eternity"],
        ["220878", "Deep Blue"],
        ["228B22", "Forest Green"],
        ["233418", "Mallard"],
        ["240A40", "Violet"],
        ["240C02", "Kilamanjaro"],
        ["242A1D", "Log Cabin"],
        ["242E16", "Black Olive"],
        ["24500F", "Green House"],
        ["251607", "Graphite"],
        ["251706", "Cannon Black"],
        ["251F4F", "Port Gore"],
        ["25272C", "Shark"],
        ["25311C", "Green Kelp"],
        ["2596D1", "Curious Blue"],
        ["260368", "Paua"],
        ["26056A", "Paris M"],
        ["261105", "Wood Bark"],
        ["261414", "Gondola"],
        ["262335", "Steel Gray"],
        ["26283B", "Ebony Clay"],
        ["273A81", "Bay of Many"],
        ["27504B", "Plantation"],
        ["278A5B", "Eucalyptus"],
        ["281E15", "Oil"],
        ["283A77", "Astronaut"],
        ["286ACD", "Mariner"],
        ["290C5E", "Violent Violet"],
        ["292130", "Bastille"],
        ["292319", "Zeus"],
        ["292937", "Charade"],
        ["297B9A", "Jelly Bean"],
        ["29AB87", "Jungle Green"],
        ["2A0359", "Cherry Pie"],
        ["2A140E", "Coffee Bean"],
        ["2A2630", "Baltic Sea"],
        ["2A380B", "Turtle Green"],
        ["2A52BE", "Cerulean Blue"],
        ["2B0202", "Sepia Black"],
        ["2B194F", "Valhalla"],
        ["2B3228", "Heavy Metal"],
        ["2C0E8C", "Blue Gem"],
        ["2C1632", "Revolver"],
        ["2C2133", "Bleached Cedar"],
        ["2C8C84", "Lochinvar"],
        ["2D2510", "Mikado"],
        ["2D383A", "Outer Space"],
        ["2D569B", "St Tropaz"],
        ["2E0329", "Jacaranda"],
        ["2E1905", "Jacko Bean"],
        ["2E3222", "Rangitoto"],
        ["2E3F62", "Rhino"],
        ["2E8B57", "Sea Green"],
        ["2EBFD4", "Scooter"],
        ["2F270E", "Onion"],
        ["2F3CB3", "Governor Bay"],
        ["2F519E", "Sapphire"],
        ["2F5A57", "Spectra"],
        ["2F6168", "Casal"],
        ["300529", "Melanzane"],
        ["301F1E", "Cocoa Brown"],
        ["302A0F", "Woodrush"],
        ["304B6A", "San Juan"],
        ["30D5C8", "Turquoise"],
        ["311C17", "Eclipse"],
        ["314459", "Pickled Bluewood"],
        ["315BA1", "Azure"],
        ["31728D", "Calypso"],
        ["317D82", "Paradiso"],
        ["32127A", "Persian Indigo"],
        ["32293A", "Blackcurrant"],
        ["323232", "Mine Shaft"],
        ["325D52", "Stromboli"],
        ["327C14", "Bilbao"],
        ["327DA0", "Astral"],
        ["33036B", "Christalle"],
        ["33292F", "Thunder"],
        ["33CC99", "Shamrock"],
        ["341515", "Tamarind"],
        ["350036", "Mardi Gras"],
        ["350E42", "Valentino"],
        ["350E57", "Jagger"],
        ["353542", "Tuna"],
        ["354E8C", "Chambray"],
        ["363050", "Martinique"],
        ["363534", "Tuatara"],
        ["363C0D", "Waiouru"],
        ["36747D", "Ming"],
        ["368716", "La Palma"],
        ["370202", "Chocolate"],
        ["371D09", "Clinker"],
        ["37290E", "Brown Tumbleweed"],
        ["373021", "Birch"],
        ["377475", "Oracle"],
        ["380474", "Blue Diamond"],
        ["381A51", "Grape"],
        ["383533", "Dune"],
        ["384555", "Oxford Blue"],
        ["384910", "Clover"],
        ["394851", "Limed Spruce"],
        ["396413", "Dell"],
        ["3A0020", "Toledo"],
        ["3A2010", "Sambuca"],
        ["3A2A6A", "Jacarta"],
        ["3A686C", "William"],
        ["3A6A47", "Killarney"],
        ["3AB09E", "Keppel"],
        ["3B000B", "Temptress"],
        ["3B0910", "Aubergine"],
        ["3B1F1F", "Jon"],
        ["3B2820", "Treehouse"],
        ["3B7A57", "Amazon"],
        ["3B91B4", "Boston Blue"],
        ["3C0878", "Windsor"],
        ["3C1206", "Rebel"],
        ["3C1F76", "Meteorite"],
        ["3C2005", "Dark Ebony"],
        ["3C3910", "Camouflage"],
        ["3C4151", "Bright Gray"],
        ["3C4443", "Cape Cod"],
        ["3C493A", "Lunar Green"],
        ["3D0C02", "Bean  "],
        ["3D2B1F", "Bistre"],
        ["3D7D52", "Goblin"],
        ["3E0480", "Kingfisher Daisy"],
        ["3E1C14", "Cedar"],
        ["3E2B23", "English Walnut"],
        ["3E2C1C", "Black Marlin"],
        ["3E3A44", "Ship Gray"],
        ["3EABBF", "Pelorous"],
        ["3F2109", "Bronze"],
        ["3F2500", "Cola"],
        ["3F3002", "Madras"],
        ["3F307F", "Minsk"],
        ["3F4C3A", "Cabbage Pont"],
        ["3F583B", "Tom Thumb"],
        ["3F5D53", "Mineral Green"],
        ["3FC1AA", "Puerto Rico"],
        ["3FFF00", "Harlequin"],
        ["401801", "Brown Pod"],
        ["40291D", "Cork"],
        ["403B38", "Masala"],
        ["403D19", "Thatch Green"],
        ["405169", "Fiord"],
        ["40826D", "Viridian"],
        ["40A860", "Chateau Green"],
        ["410056", "Ripe Plum"],
        ["411F10", "Paco"],
        ["412010", "Deep Oak"],
        ["413C37", "Merlin"],
        ["414257", "Gun Powder"],
        ["414C7D", "East Bay"],
        ["4169E1", "Royal Blue"],
        ["41AA78", "Ocean Green"],
        ["420303", "Burnt Maroon"],
        ["423921", "Lisbon Brown"],
        ["427977", "Faded Jade"],
        ["431560", "Scarlet Gum"],
        ["433120", "Iroko"],
        ["433E37", "Armadillo"],
        ["434C59", "River Bed"],
        ["436A0D", "Green Leaf"],
        ["44012D", "Barossa"],
        ["441D00", "Morocco Brown"],
        ["444954", "Mako"],
        ["454936", "Kelp"],
        ["456CAC", "San Marino"],
        ["45B1E8", "Picton Blue"],
        ["460B41", "Loulou"],
        ["462425", "Crater Brown"],
        ["465945", "Gray Asparagus"],
        ["4682B4", "Steel Blue"],
        ["480404", "Rustic Red"],
        ["480607", "Bulgarian Rose"],
        ["480656", "Clairvoyant"],
        ["481C1C", "Cocoa Bean"],
        ["483131", "Woody Brown"],
        ["483C32", "Taupe"],
        ["49170C", "Van Cleef"],
        ["492615", "Brown Derby"],
        ["49371B", "Metallic Bronze"],
        ["495400", "Verdun Green"],
        ["496679", "Blue Bayoux"],
        ["497183", "Bismark"],
        ["4A2A04", "Bracken"],
        ["4A3004", "Deep Bronze"],
        ["4A3C30", "Mondo"],
        ["4A4244", "Tundora"],
        ["4A444B", "Gravel"],
        ["4A4E5A", "Trout"],
        ["4B0082", "Pigment Indigo"],
        ["4B5D52", "Nandor"],
        ["4C3024", "Saddle"],
        ["4C4F56", "Abbey"],
        ["4D0135", "Blackberry"],
        ["4D0A18", "Cab Sav"],
        ["4D1E01", "Indian Tan"],
        ["4D282D", "Cowboy"],
        ["4D282E", "Livid Brown"],
        ["4D3833", "Rock"],
        ["4D3D14", "Punga"],
        ["4D400F", "Bronzetone"],
        ["4D5328", "Woodland"],
        ["4E0606", "Mahogany"],
        ["4E2A5A", "Bossanova"],
        ["4E3B41", "Matterhorn"],
        ["4E420C", "Bronze Olive"],
        ["4E4562", "Mulled Wine"],
        ["4E6649", "Axolotl"],
        ["4E7F9E", "Wedgewood"],
        ["4EABD1", "Shakespeare"],
        ["4F1C70", "Honey Flower"],
        ["4F2398", "Daisy Bush"],
        ["4F69C6", "Indigo"],
        ["4F7942", "Fern Green"],
        ["4F9D5D", "Fruit Salad"],
        ["4FA83D", "Apple"],
        ["504351", "Mortar"],
        ["507096", "Kashmir Blue"],
        ["507672", "Cutty Sark"],
        ["50C878", "Emerald"],
        ["514649", "Emperor"],
        ["516E3D", "Chalet Green"],
        ["517C66", "Como"],
        ["51808F", "Smalt Blue"],
        ["52001F", "Castro"],
        ["520C17", "Maroon Oak"],
        ["523C94", "Gigas"],
        ["533455", "Voodoo"],
        ["534491", "Victoria"],
        ["53824B", "Hippie Green"],
        ["541012", "Heath"],
        ["544333", "Judge Gray"],
        ["54534D", "Fuscous Gray"],
        ["549019", "Vida Loca"],
        ["55280C", "Cioccolato"],
        ["555B10", "Saratoga"],
        ["556D56", "Finlandia"],
        ["5590D9", "Havelock Blue"],
        ["56B4BE", "Fountain Blue"],
        ["578363", "Spring Leaves"],
        ["583401", "Saddle Brown"],
        ["585562", "Scarpa Flow"],
        ["587156", "Cactus"],
        ["589AAF", "Hippie Blue"],
        ["591D35", "Wine Berry"],
        ["592804", "Brown Bramble"],
        ["593737", "Congo Brown"],
        ["594433", "Millbrook"],
        ["5A6E9C", "Waikawa Gray"],
        ["5A87A0", "Horizon"],
        ["5B3013", "Jambalaya"],
        ["5C0120", "Bordeaux"],
        ["5C0536", "Mulberry Wood"],
        ["5C2E01", "Carnaby Tan"],
        ["5C5D75", "Comet"],
        ["5D1E0F", "Redwood"],
        ["5D4C51", "Don Juan"],
        ["5D5C58", "Chicago"],
        ["5D5E37", "Verdigris"],
        ["5D7747", "Dingley"],
        ["5DA19F", "Breaker Bay"],
        ["5E483E", "Kabul"],
        ["5E5D3B", "Hemlock"],
        ["5F3D26", "Irish Coffee"],
        ["5F5F6E", "Mid Gray"],
        ["5F6672", "Shuttle Gray"],
        ["5FA777", "Aqua Forest"],
        ["5FB3AC", "Tradewind"],
        ["604913", "Horses Neck"],
        ["605B73", "Smoky"],
        ["606E68", "Corduroy"],
        ["6093D1", "Danube"],
        ["612718", "Espresso"],
        ["614051", "Eggplant"],
        ["615D30", "Costa Del Sol"],
        ["61845F", "Glade Green"],
        ["622F30", "Buccaneer"],
        ["623F2D", "Quincy"],
        ["624E9A", "Butterfly Bush"],
        ["625119", "West Coast"],
        ["626649", "Finch"],
        ["639A8F", "Patina"],
        ["63B76C", "Fern"],
        ["6456B7", "Blue Violet"],
        ["646077", "Dolphin"],
        ["646463", "Storm Dust"],
        ["646A54", "Siam"],
        ["646E75", "Nevada"],
        ["6495ED", "Cornflower Blue"],
        ["64CCDB", "Viking"],
        ["65000B", "Rosewood"],
        ["651A14", "Cherrywood"],
        ["652DC1", "Purple Heart"],
        ["657220", "Fern Frond"],
        ["65745D", "Willow Grove"],
        ["65869F", "Hoki"],
        ["660045", "Pompadour"],
        ["660099", "Purple"],
        ["66023C", "Tyrian Purple"],
        ["661010", "Dark Tan"],
        ["66B58F", "Silver Tree"],
        ["66FF00", "Bright Green"],
        ["66FF66", "Screamin' Green"],
        ["67032D", "Black Rose"],
        ["675FA6", "Scampi"],
        ["676662", "Ironside Gray"],
        ["678975", "Viridian Green"],
        ["67A712", "Christi"],
        ["683600", "Nutmeg Wood Finish"],
        ["685558", "Zambezi"],
        ["685E6E", "Salt Box"],
        ["692545", "Tawny Port"],
        ["692D54", "Finn"],
        ["695F62", "Scorpion"],
        ["697E9A", "Lynch"],
        ["6A442E", "Spice"],
        ["6A5D1B", "Himalaya"],
        ["6A6051", "Soya Bean"],
        ["6B2A14", "Hairy Heath"],
        ["6B3FA0", "Royal Purple"],
        ["6B4E31", "Shingle Fawn"],
        ["6B5755", "Dorado"],
        ["6B8BA2", "Bermuda Gray"],
        ["6B8E23", "Olive Drab"],
        ["6C3082", "Eminence"],
        ["6CDAE7", "Turquoise Blue"],
        ["6D0101", "Lonestar"],
        ["6D5E54", "Pine Cone"],
        ["6D6C6C", "Dove Gray"],
        ["6D9292", "Juniper"],
        ["6D92A1", "Gothic"],
        ["6E0902", "Red Oxide"],
        ["6E1D14", "Moccaccino"],
        ["6E4826", "Pickled Bean"],
        ["6E4B26", "Dallas"],
        ["6E6D57", "Kokoda"],
        ["6E7783", "Pale Sky"],
        ["6F440C", "Cafe Royale"],
        ["6F6A61", "Flint"],
        ["6F8E63", "Highland"],
        ["6F9D02", "Limeade"],
        ["6FD0C5", "Downy"],
        ["701C1C", "Persian Plum"],
        ["704214", "Sepia"],
        ["704A07", "Antique Bronze"],
        ["704F50", "Ferra"],
        ["706555", "Coffee"],
        ["708090", "Slate Gray"],
        ["711A00", "Cedar Wood Finish"],
        ["71291D", "Metallic Copper"],
        ["714693", "Affair"],
        ["714AB2", "Studio"],
        ["715D47", "Tobacco Brown"],
        ["716338", "Yellow Metal"],
        ["716B56", "Peat"],
        ["716E10", "Olivetone"],
        ["717486", "Storm Gray"],
        ["718080", "Sirocco"],
        ["71D9E2", "Aquamarine Blue"],
        ["72010F", "Venetian Red"],
        ["724A2F", "Old Copper"],
        ["726D4E", "Go Ben"],
        ["727B89", "Raven"],
        ["731E8F", "Seance"],
        ["734A12", "Raw Umber"],
        ["736C9F", "Kimberly"],
        ["736D58", "Crocodile"],
        ["737829", "Crete"],
        ["738678", "Xanadu"],
        ["74640D", "Spicy Mustard"],
        ["747D63", "Limed Ash"],
        ["747D83", "Rolling Stone"],
        ["748881", "Blue Smoke"],
        ["749378", "Laurel"],
        ["74C365", "Mantis"],
        ["755A57", "Russett"],
        ["7563A8", "Deluge"],
        ["76395D", "Cosmic"],
        ["7666C6", "Blue Marguerite"],
        ["76BD17", "Lima"],
        ["76D7EA", "Sky Blue"],
        ["770F05", "Dark Burgundy"],
        ["771F1F", "Crown of Thorns"],
        ["773F1A", "Walnut"],
        ["776F61", "Pablo"],
        ["778120", "Pacifika"],
        ["779E86", "Oxley"],
        ["77DD77", "Pastel Green"],
        ["780109", "Japanese Maple"],
        ["782D19", "Mocha"],
        ["782F16", "Peanut"],
        ["78866B", "Camouflage Green"],
        ["788A25", "Wasabi"],
        ["788BBA", "Ship Cove"],
        ["78A39C", "Sea Nymph"],
        ["795D4C", "Roman Coffee"],
        ["796878", "Old Lavender"],
        ["796989", "Rum"],
        ["796A78", "Fedora"],
        ["796D62", "Sandstone"],
        ["79DEEC", "Spray"],
        ["7A013A", "Siren"],
        ["7A58C1", "Fuchsia Blue"],
        ["7A7A7A", "Boulder"],
        ["7A89B8", "Wild Blue Yonder"],
        ["7AC488", "De York"],
        ["7B3801", "Red Beech"],
        ["7B3F00", "Cinnamon"],
        ["7B6608", "Yukon Gold"],
        ["7B7874", "Tapa"],
        ["7B7C94", "Waterloo "],
        ["7B8265", "Flax Smoke"],
        ["7B9F80", "Amulet"],
        ["7BA05B", "Asparagus"],
        ["7C1C05", "Kenyan Copper"],
        ["7C7631", "Pesto"],
        ["7C778A", "Topaz"],
        ["7C7B7A", "Concord"],
        ["7C7B82", "Jumbo"],
        ["7C881A", "Trendy Green"],
        ["7CA1A6", "Gumbo"],
        ["7CB0A1", "Acapulco"],
        ["7CB7BB", "Neptune"],
        ["7D2C14", "Pueblo"],
        ["7DA98D", "Bay Leaf"],
        ["7DC8F7", "Malibu"],
        ["7DD8C6", "Bermuda"],
        ["7E3A15", "Copper Canyon"],
        ["7F1734", "Claret"],
        ["7F3A02", "Peru Tan"],
        ["7F626D", "Falcon"],
        ["7F7589", "Mobster"],
        ["7F76D3", "Moody Blue"],
        ["7FFF00", "Chartreuse"],
        ["7FFFD4", "Aquamarine"],
        ["800000", "Maroon"],
        ["800B47", "Rose Bud Cherry"],
        ["801818", "Falu Red"],
        ["80341F", "Red Robin"],
        ["803790", "Vivid Violet"],
        ["80461B", "Russet"],
        ["807E79", "Friar Gray"],
        ["808000", "Olive"],
        ["808080", "Gray"],
        ["80B3AE", "Gulf Stream"],
        ["80B3C4", "Glacier"],
        ["80CCEA", "Seagull"],
        ["81422C", "Nutmeg"],
        ["816E71", "Spicy Pink"],
        ["817377", "Empress"],
        ["819885", "Spanish Green"],
        ["826F65", "Sand Dune"],
        ["828685", "Gunsmoke"],
        ["828F72", "Battleship Gray"],
        ["831923", "Merlot"],
        ["837050", "Shadow"],
        ["83AA5D", "Chelsea Cucumber"],
        ["83D0C6", "Monte Carlo"],
        ["843179", "Plum"],
        ["84A0A0", "Granny Smith"],
        ["8581D9", "Chetwode Blue"],
        ["858470", "Bandicoot"],
        ["859FAF", "Bali Hai"],
        ["85C4CC", "Half Baked"],
        ["860111", "Red Devil"],
        ["863C3C", "Lotus"],
        ["86483C", "Ironstone"],
        ["864D1E", "Bull Shot"],
        ["86560A", "Rusty Nail"],
        ["868974", "Bitter"],
        ["86949F", "Regent Gray"],
        ["871550", "Disco"],
        ["87756E", "Americano"],
        ["877C7B", "Hurricane"],
        ["878D91", "Oslo Gray"],
        ["87AB39", "Sushi"],
        ["885342", "Spicy Mix"],
        ["886221", "Kumera"],
        ["888387", "Suva Gray"],
        ["888D65", "Avocado"],
        ["893456", "Camelot"],
        ["893843", "Solid Pink"],
        ["894367", "Cannon Pink"],
        ["897D6D", "Makara"],
        ["8A3324", "Burnt Umber"],
        ["8A73D6", "True V"],
        ["8A8360", "Clay Creek"],
        ["8A8389", "Monsoon"],
        ["8A8F8A", "Stack"],
        ["8AB9F1", "Jordy Blue"],
        ["8B00FF", "Electric Violet"],
        ["8B0723", "Monarch"],
        ["8B6B0B", "Corn Harvest"],
        ["8B8470", "Olive Haze"],
        ["8B847E", "Schooner"],
        ["8B8680", "Natural Gray"],
        ["8B9C90", "Mantle"],
        ["8B9FEE", "Portage"],
        ["8BA690", "Envy"],
        ["8BA9A5", "Cascade"],
        ["8BE6D8", "Riptide"],
        ["8C055E", "Cardinal Pink"],
        ["8C472F", "Mule Fawn"],
        ["8C5738", "Potters Clay"],
        ["8C6495", "Trendy Pink"],
        ["8D0226", "Paprika"],
        ["8D3D38", "Sanguine Brown"],
        ["8D3F3F", "Tosca"],
        ["8D7662", "Cement"],
        ["8D8974", "Granite Green"],
        ["8D90A1", "Manatee"],
        ["8DA8CC", "Polo Blue"],
        ["8E0000", "Red Berry"],
        ["8E4D1E", "Rope"],
        ["8E6F70", "Opium"],
        ["8E775E", "Domino"],
        ["8E8190", "Mamba"],
        ["8EABC1", "Nepal"],
        ["8F021C", "Pohutukawa"],
        ["8F3E33", "El Salva"],
        ["8F4B0E", "Korma"],
        ["8F8176", "Squirrel"],
        ["8FD6B4", "Vista Blue"],
        ["900020", "Burgundy"],
        ["901E1E", "Old Brick"],
        ["907874", "Hemp"],
        ["907B71", "Almond Frost"],
        ["908D39", "Sycamore"],
        ["92000A", "Sangria"],
        ["924321", "Cumin"],
        ["926F5B", "Beaver"],
        ["928573", "Stonewall"],
        ["928590", "Venus"],
        ["9370DB", "Medium Purple"],
        ["93CCEA", "Cornflower"],
        ["93DFB8", "Algae Green"],
        ["944747", "Copper Rust"],
        ["948771", "Arrowtown"],
        ["950015", "Scarlett"],
        ["956387", "Strikemaster"],
        ["959396", "Mountain Mist"],
        ["960018", "Carmine"],
        ["964B00", "Brown"],
        ["967059", "Leather"],
        ["9678B6", "Purple Mountain's Majesty"],
        ["967BB6", "Lavender Purple"],
        ["96A8A1", "Pewter"],
        ["96BBAB", "Summer Green"],
        ["97605D", "Au Chico"],
        ["9771B5", "Wisteria"],
        ["97CD2D", "Atlantis"],
        ["983D61", "Vin Rouge"],
        ["9874D3", "Lilac Bush"],
        ["98777B", "Bazaar"],
        ["98811B", "Hacienda"],
        ["988D77", "Pale Oyster"],
        ["98FF98", "Mint Green"],
        ["990066", "Fresh Eggplant"],
        ["991199", "Violet Eggplant"],
        ["991613", "Tamarillo"],
        ["991B07", "Totem Pole"],
        ["996666", "Copper Rose"],
        ["9966CC", "Amethyst"],
        ["997A8D", "Mountbatten Pink"],
        ["9999CC", "Blue Bell"],
        ["9A3820", "Prairie Sand"],
        ["9A6E61", "Toast"],
        ["9A9577", "Gurkha"],
        ["9AB973", "Olivine"],
        ["9AC2B8", "Shadow Green"],
        ["9B4703", "Oregon"],
        ["9B9E8F", "Lemon Grass"],
        ["9C3336", "Stiletto"],
        ["9D5616", "Hawaiian Tan"],
        ["9DACB7", "Gull Gray"],
        ["9DC209", "Pistachio"],
        ["9DE093", "Granny Smith Apple"],
        ["9DE5FF", "Anakiwa"],
        ["9E5302", "Chelsea Gem"],
        ["9E5B40", "Sepia Skin"],
        ["9EA587", "Sage"],
        ["9EA91F", "Citron"],
        ["9EB1CD", "Rock Blue"],
        ["9EDEE0", "Morning Glory"],
        ["9F381D", "Cognac"],
        ["9F821C", "Reef Gold"],
        ["9F9F9C", "Star Dust"],
        ["9FA0B1", "Santas Gray"],
        ["9FD7D3", "Sinbad"],
        ["9FDD8C", "Feijoa"],
        ["A02712", "Tabasco"],
        ["A1750D", "Buttered Rum"],
        ["A1ADB5", "Hit Gray"],
        ["A1C50A", "Citrus"],
        ["A1DAD7", "Aqua Island"],
        ["A1E9DE", "Water Leaf"],
        ["A2006D", "Flirt"],
        ["A23B6C", "Rouge"],
        ["A26645", "Cape Palliser"],
        ["A2AAB3", "Gray Chateau"],
        ["A2AEAB", "Edward"],
        ["A3807B", "Pharlap"],
        ["A397B4", "Amethyst Smoke"],
        ["A3E3ED", "Blizzard Blue"],
        ["A4A49D", "Delta"],
        ["A4A6D3", "Wistful"],
        ["A4AF6E", "Green Smoke"],
        ["A50B5E", "Jazzberry Jam"],
        ["A59B91", "Zorba"],
        ["A5CB0C", "Bahia"],
        ["A62F20", "Roof Terracotta"],
        ["A65529", "Paarl"],
        ["A68B5B", "Barley Corn"],
        ["A69279", "Donkey Brown"],
        ["A6A29A", "Dawn"],
        ["A72525", "Mexican Red"],
        ["A7882C", "Luxor Gold"],
        ["A85307", "Rich Gold"],
        ["A86515", "Reno Sand"],
        ["A86B6B", "Coral Tree"],
        ["A8989B", "Dusty Gray"],
        ["A899E6", "Dull Lavender"],
        ["A8A589", "Tallow"],
        ["A8AE9C", "Bud"],
        ["A8AF8E", "Locust"],
        ["A8BD9F", "Norway"],
        ["A8E3BD", "Chinook"],
        ["A9A491", "Gray Olive"],
        ["A9ACB6", "Aluminium"],
        ["A9B2C3", "Cadet Blue"],
        ["A9B497", "Schist"],
        ["A9BDBF", "Tower Gray"],
        ["A9BEF2", "Perano"],
        ["A9C6C2", "Opal"],
        ["AA375A", "Night Shadz"],
        ["AA4203", "Fire"],
        ["AA8B5B", "Muesli"],
        ["AA8D6F", "Sandal"],
        ["AAA5A9", "Shady Lady"],
        ["AAA9CD", "Logan"],
        ["AAABB7", "Spun Pearl"],
        ["AAD6E6", "Regent St Blue"],
        ["AAF0D1", "Magic Mint"],
        ["AB0563", "Lipstick"],
        ["AB3472", "Royal Heath"],
        ["AB917A", "Sandrift"],
        ["ABA0D9", "Cold Purple"],
        ["ABA196", "Bronco"],
        ["AC8A56", "Limed Oak"],
        ["AC91CE", "East Side"],
        ["AC9E22", "Lemon Ginger"],
        ["ACA494", "Napa"],
        ["ACA586", "Hillary"],
        ["ACA59F", "Cloudy"],
        ["ACACAC", "Silver Chalice"],
        ["ACB78E", "Swamp Green"],
        ["ACCBB1", "Spring Rain"],
        ["ACDD4D", "Conifer"],
        ["ACE1AF", "Celadon"],
        ["AD781B", "Mandalay"],
        ["ADBED1", "Casper"],
        ["ADDFAD", "Moss Green"],
        ["ADE6C4", "Padua"],
        ["ADFF2F", "Green Yellow"],
        ["AE4560", "Hippie Pink"],
        ["AE6020", "Desert"],
        ["AE809E", "Bouquet"],
        ["AF4035", "Medium Carmine"],
        ["AF4D43", "Apple Blossom"],
        ["AF593E", "Brown Rust"],
        ["AF8751", "Driftwood"],
        ["AF8F2C", "Alpine"],
        ["AF9F1C", "Lucky"],
        ["AFA09E", "Martini"],
        ["AFB1B8", "Bombay"],
        ["AFBDD9", "Pigeon Post"],
        ["B04C6A", "Cadillac"],
        ["B05D54", "Matrix"],
        ["B05E81", "Tapestry"],
        ["B06608", "Mai Tai"],
        ["B09A95", "Del Rio"],
        ["B0E0E6", "Powder Blue"],
        ["B0E313", "Inch Worm"],
        ["B10000", "Bright Red"],
        ["B14A0B", "Vesuvius"],
        ["B1610B", "Pumpkin Skin"],
        ["B16D52", "Santa Fe"],
        ["B19461", "Teak"],
        ["B1E2C1", "Fringy Flower"],
        ["B1F4E7", "Ice Cold"],
        ["B20931", "Shiraz"],
        ["B2A1EA", "Biloba Flower"],
        ["B32D29", "Tall Poppy"],
        ["B35213", "Fiery Orange"],
        ["B38007", "Hot Toddy"],
        ["B3AF95", "Taupe Gray"],
        ["B3C110", "La Rioja"],
        ["B43332", "Well Read"],
        ["B44668", "Blush"],
        ["B4CFD3", "Jungle Mist"],
        ["B57281", "Turkish Rose"],
        ["B57EDC", "Lavender"],
        ["B5A27F", "Mongoose"],
        ["B5B35C", "Olive Green"],
        ["B5D2CE", "Jet Stream"],
        ["B5ECDF", "Cruise"],
        ["B6316C", "Hibiscus"],
        ["B69D98", "Thatch"],
        ["B6B095", "Heathered Gray"],
        ["B6BAA4", "Eagle"],
        ["B6D1EA", "Spindle"],
        ["B6D3BF", "Gum Leaf"],
        ["B7410E", "Rust"],
        ["B78E5C", "Muddy Waters"],
        ["B7A214", "Sahara"],
        ["B7A458", "Husk"],
        ["B7B1B1", "Nobel"],
        ["B7C3D0", "Heather"],
        ["B7F0BE", "Madang"],
        ["B81104", "Milano Red"],
        ["B87333", "Copper"],
        ["B8B56A", "Gimblet"],
        ["B8C1B1", "Green Spring"],
        ["B8C25D", "Celery"],
        ["B8E0F9", "Sail"],
        ["B94E48", "Chestnut"],
        ["B95140", "Crail"],
        ["B98D28", "Marigold"],
        ["B9C46A", "Wild Willow"],
        ["B9C8AC", "Rainee"],
        ["BA0101", "Guardsman Red"],
        ["BA450C", "Rock Spray"],
        ["BA6F1E", "Bourbon"],
        ["BA7F03", "Pirate Gold"],
        ["BAB1A2", "Nomad"],
        ["BAC7C9", "Submarine"],
        ["BAEEF9", "Charlotte"],
        ["BB3385", "Medium Red Violet"],
        ["BB8983", "Brandy Rose"],
        ["BBD009", "Rio Grande"],
        ["BBD7C1", "Surf"],
        ["BCC9C2", "Powder Ash"],
        ["BD5E2E", "Tuscany"],
        ["BD978E", "Quicksand"],
        ["BDB1A8", "Silk"],
        ["BDB2A1", "Malta"],
        ["BDB3C7", "Chatelle"],
        ["BDBBD7", "Lavender Gray"],
        ["BDBDC6", "French Gray"],
        ["BDC8B3", "Clay Ash"],
        ["BDC9CE", "Loblolly"],
        ["BDEDFD", "French Pass"],
        ["BEA6C3", "London Hue"],
        ["BEB5B7", "Pink Swan"],
        ["BEDE0D", "Fuego"],
        ["BF5500", "Rose of Sharon"],
        ["BFB8B0", "Tide"],
        ["BFBED8", "Blue Haze"],
        ["BFC1C2", "Silver Sand"],
        ["BFC921", "Key Lime Pie"],
        ["BFDBE2", "Ziggurat"],
        ["BFFF00", "Lime"],
        ["C02B18", "Thunderbird"],
        ["C04737", "Mojo"],
        ["C08081", "Old Rose"],
        ["C0C0C0", "Silver"],
        ["C0D3B9", "Pale Leaf"],
        ["C0D8B6", "Pixie Green"],
        ["C1440E", "Tia Maria"],
        ["C154C1", "Fuchsia Pink"],
        ["C1A004", "Buddha Gold"],
        ["C1B7A4", "Bison Hide"],
        ["C1BAB0", "Tea"],
        ["C1BECD", "Gray Suit"],
        ["C1D7B0", "Sprout"],
        ["C1F07C", "Sulu"],
        ["C26B03", "Indochine"],
        ["C2955D", "Twine"],
        ["C2BDB6", "Cotton Seed"],
        ["C2CAC4", "Pumice"],
        ["C2E8E5", "Jagged Ice"],
        ["C32148", "Maroon Flush"],
        ["C3B091", "Indian Khaki"],
        ["C3BFC1", "Pale Slate"],
        ["C3C3BD", "Gray Nickel"],
        ["C3CDE6", "Periwinkle Gray"],
        ["C3D1D1", "Tiara"],
        ["C3DDF9", "Tropical Blue"],
        ["C41E3A", "Cardinal"],
        ["C45655", "Fuzzy Wuzzy Brown"],
        ["C45719", "Orange Roughy"],
        ["C4C4BC", "Mist Gray"],
        ["C4D0B0", "Coriander"],
        ["C4F4EB", "Mint Tulip"],
        ["C54B8C", "Mulberry"],
        ["C59922", "Nugget"],
        ["C5994B", "Tussock"],
        ["C5DBCA", "Sea Mist"],
        ["C5E17A", "Yellow Green"],
        ["C62D42", "Brick Red"],
        ["C6726B", "Contessa"],
        ["C69191", "Oriental Pink"],
        ["C6A84B", "Roti"],
        ["C6C3B5", "Ash"],
        ["C6C8BD", "Kangaroo"],
        ["C6E610", "Las Palmas"],
        ["C7031E", "Monza"],
        ["C71585", "Red Violet"],
        ["C7BCA2", "Coral Reef"],
        ["C7C1FF", "Melrose"],
        ["C7C4BF", "Cloud"],
        ["C7C9D5", "Ghost"],
        ["C7CD90", "Pine Glade"],
        ["C7DDE5", "Botticelli"],
        ["C88A65", "Antique Brass"],
        ["C8A2C8", "Lilac"],
        ["C8A528", "Hokey Pokey"],
        ["C8AABF", "Lily"],
        ["C8B568", "Laser"],
        ["C8E3D7", "Edgewater"],
        ["C96323", "Piper"],
        ["C99415", "Pizza"],
        ["C9A0DC", "Light Wisteria"],
        ["C9B29B", "Rodeo Dust"],
        ["C9B35B", "Sundance"],
        ["C9B93B", "Earls Green"],
        ["C9C0BB", "Silver Rust"],
        ["C9D9D2", "Conch"],
        ["C9FFA2", "Reef"],
        ["C9FFE5", "Aero Blue"],
        ["CA3435", "Flush Mahogany"],
        ["CABB48", "Turmeric"],
        ["CADCD4", "Paris White"],
        ["CAE00D", "Bitter Lemon"],
        ["CAE6DA", "Skeptic"],
        ["CB8FA9", "Viola"],
        ["CBCAB6", "Foggy Gray"],
        ["CBD3B0", "Green Mist"],
        ["CBDBD6", "Nebula"],
        ["CC3333", "Persian Red"],
        ["CC5500", "Burnt Orange"],
        ["CC7722", "Ochre"],
        ["CC8899", "Puce"],
        ["CCCAA8", "Thistle Green"],
        ["CCCCFF", "Periwinkle"],
        ["CCFF00", "Electric Lime"],
        ["CD5700", "Tenn"],
        ["CD5C5C", "Chestnut Rose"],
        ["CD8429", "Brandy Punch"],
        ["CDF4FF", "Onahau"],
        ["CEB98F", "Sorrell Brown"],
        ["CEBABA", "Cold Turkey"],
        ["CEC291", "Yuma"],
        ["CEC7A7", "Chino"],
        ["CFA39D", "Eunry"],
        ["CFB53B", "Old Gold"],
        ["CFDCCF", "Tasman"],
        ["CFE5D2", "Surf Crest"],
        ["CFF9F3", "Humming Bird"],
        ["CFFAF4", "Scandal"],
        ["D05F04", "Red Stage"],
        ["D06DA1", "Hopbush"],
        ["D07D12", "Meteor"],
        ["D0BEF8", "Perfume"],
        ["D0C0E5", "Prelude"],
        ["D0F0C0", "Tea Green"],
        ["D18F1B", "Geebung"],
        ["D1BEA8", "Vanilla"],
        ["D1C6B4", "Soft Amber"],
        ["D1D2CA", "Celeste"],
        ["D1D2DD", "Mischka"],
        ["D1E231", "Pear"],
        ["D2691E", "Hot Cinnamon"],
        ["D27D46", "Raw Sienna"],
        ["D29EAA", "Careys Pink"],
        ["D2B48C", "Tan"],
        ["D2DA97", "Deco"],
        ["D2F6DE", "Blue Romance"],
        ["D2F8B0", "Gossip"],
        ["D3CBBA", "Sisal"],
        ["D3CDC5", "Swirl"],
        ["D47494", "Charm"],
        ["D4B6AF", "Clam Shell"],
        ["D4BF8D", "Straw"],
        ["D4C4A8", "Akaroa"],
        ["D4CD16", "Bird Flower"],
        ["D4D7D9", "Iron"],
        ["D4DFE2", "Geyser"],
        ["D4E2FC", "Hawkes Blue"],
        ["D54600", "Grenadier"],
        ["D591A4", "Can Can"],
        ["D59A6F", "Whiskey"],
        ["D5D195", "Winter Hazel"],
        ["D5F6E3", "Granny Apple"],
        ["D69188", "My Pink"],
        ["D6C562", "Tacha"],
        ["D6CEF6", "Moon Raker"],
        ["D6D6D1", "Quill Gray"],
        ["D6FFDB", "Snowy Mint"],
        ["D7837F", "New York Pink"],
        ["D7C498", "Pavlova"],
        ["D7D0FF", "Fog"],
        ["D84437", "Valencia"],
        ["D87C63", "Japonica"],
        ["D8BFD8", "Thistle"],
        ["D8C2D5", "Maverick"],
        ["D8FCFA", "Foam"],
        ["D94972", "Cabaret"],
        ["D99376", "Burning Sand"],
        ["D9B99B", "Cameo"],
        ["D9D6CF", "Timberwolf"],
        ["D9DCC1", "Tana"],
        ["D9E4F5", "Link Water"],
        ["D9F7FF", "Mabel"],
        ["DA3287", "Cerise"],
        ["DA5B38", "Flame Pea"],
        ["DA6304", "Bamboo"],
        ["DA6A41", "Red Damask"],
        ["DA70D6", "Orchid"],
        ["DA8A67", "Copperfield"],
        ["DAA520", "Golden Grass"],
        ["DAECD6", "Zanah"],
        ["DAF4F0", "Iceberg"],
        ["DAFAFF", "Oyster Bay"],
        ["DB5079", "Cranberry"],
        ["DB9690", "Petite Orchid"],
        ["DB995E", "Di Serria"],
        ["DBDBDB", "Alto"],
        ["DBFFF8", "Frosted Mint"],
        ["DC143C", "Crimson"],
        ["DC4333", "Punch"],
        ["DCB20C", "Galliano"],
        ["DCB4BC", "Blossom"],
        ["DCD747", "Wattle"],
        ["DCD9D2", "Westar"],
        ["DCDDCC", "Moon Mist"],
        ["DCEDB4", "Caper"],
        ["DCF0EA", "Swans Down"],
        ["DDD6D5", "Swiss Coffee"],
        ["DDF9F1", "White Ice"],
        ["DE3163", "Cerise Red"],
        ["DE6360", "Roman"],
        ["DEA681", "Tumbleweed"],
        ["DEBA13", "Gold Tips"],
        ["DEC196", "Brandy"],
        ["DECBC6", "Wafer"],
        ["DED4A4", "Sapling"],
        ["DED717", "Barberry"],
        ["DEE5C0", "Beryl Green"],
        ["DEF5FF", "Pattens Blue"],
        ["DF73FF", "Heliotrope"],
        ["DFBE6F", "Apache"],
        ["DFCD6F", "Chenin"],
        ["DFCFDB", "Lola"],
        ["DFECDA", "Willow Brook"],
        ["DFFF00", "Chartreuse Yellow"],
        ["E0B0FF", "Mauve"],
        ["E0B646", "Anzac"],
        ["E0B974", "Harvest Gold"],
        ["E0C095", "Calico"],
        ["E0FFFF", "Baby Blue"],
        ["E16865", "Sunglo"],
        ["E1BC64", "Equator"],
        ["E1C0C8", "Pink Flare"],
        ["E1E6D6", "Periglacial Blue"],
        ["E1EAD4", "Kidnapper"],
        ["E1F6E8", "Tara"],
        ["E25465", "Mandy"],
        ["E2725B", "Terracotta"],
        ["E28913", "Golden Bell"],
        ["E292C0", "Shocking"],
        ["E29418", "Dixie"],
        ["E29CD2", "Light Orchid"],
        ["E2D8ED", "Snuff"],
        ["E2EBED", "Mystic"],
        ["E2F3EC", "Apple Green"],
        ["E30B5C", "Razzmatazz"],
        ["E32636", "Alizarin Crimson"],
        ["E34234", "Cinnabar"],
        ["E3BEBE", "Cavern Pink"],
        ["E3F5E1", "Peppermint"],
        ["E3F988", "Mindaro"],
        ["E47698", "Deep Blush"],
        ["E49B0F", "Gamboge"],
        ["E4C2D5", "Melanie"],
        ["E4CFDE", "Twilight"],
        ["E4D1C0", "Bone"],
        ["E4D422", "Sunflower"],
        ["E4D5B7", "Grain Brown"],
        ["E4D69B", "Zombie"],
        ["E4F6E7", "Frostee"],
        ["E4FFD1", "Snow Flurry"],
        ["E52B50", "Amaranth"],
        ["E5841B", "Zest"],
        ["E5CCC9", "Dust Storm"],
        ["E5D7BD", "Stark White"],
        ["E5D8AF", "Hampton"],
        ["E5E0E1", "Bon Jour"],
        ["E5E5E5", "Mercury"],
        ["E5F9F6", "Polar"],
        ["E64E03", "Trinidad"],
        ["E6BE8A", "Gold Sand"],
        ["E6BEA5", "Cashmere"],
        ["E6D7B9", "Double Spanish White"],
        ["E6E4D4", "Satin Linen"],
        ["E6F2EA", "Harp"],
        ["E6F8F3", "Off Green"],
        ["E6FFE9", "Hint of Green"],
        ["E6FFFF", "Tranquil"],
        ["E77200", "Mango Tango"],
        ["E7730A", "Christine"],
        ["E79F8C", "Tonys Pink"],
        ["E79FC4", "Kobi"],
        ["E7BCB4", "Rose Fog"],
        ["E7BF05", "Corn"],
        ["E7CD8C", "Putty"],
        ["E7ECE6", "Gray Nurse"],
        ["E7F8FF", "Lily White"],
        ["E7FEFF", "Bubbles"],
        ["E89928", "Fire Bush"],
        ["E8B9B3", "Shilo"],
        ["E8E0D5", "Pearl Bush"],
        ["E8EBE0", "Green White"],
        ["E8F1D4", "Chrome White"],
        ["E8F2EB", "Gin"],
        ["E8F5F2", "Aqua Squeeze"],
        ["E96E00", "Clementine"],
        ["E97451", "Burnt Sienna"],
        ["E97C07", "Tahiti Gold"],
        ["E9CECD", "Oyster Pink"],
        ["E9D75A", "Confetti"],
        ["E9E3E3", "Ebb"],
        ["E9F8ED", "Ottoman"],
        ["E9FFFD", "Clear Day"],
        ["EA88A8", "Carissma"],
        ["EAAE69", "Porsche"],
        ["EAB33B", "Tulip Tree"],
        ["EAC674", "Rob Roy"],
        ["EADAB8", "Raffia"],
        ["EAE8D4", "White Rock"],
        ["EAF6EE", "Panache"],
        ["EAF6FF", "Solitude"],
        ["EAF9F5", "Aqua Spring"],
        ["EAFFFE", "Dew"],
        ["EB9373", "Apricot"],
        ["EBC2AF", "Zinnwaldite"],
        ["ECA927", "Fuel Yellow"],
        ["ECC54E", "Ronchi"],
        ["ECC7EE", "French Lilac"],
        ["ECCDB9", "Just Right"],
        ["ECE090", "Wild Rice"],
        ["ECEBBD", "Fall Green"],
        ["ECEBCE", "Aths Special"],
        ["ECF245", "Starship"],
        ["ED0A3F", "Red Ribbon"],
        ["ED7A1C", "Tango"],
        ["ED9121", "Carrot Orange"],
        ["ED989E", "Sea Pink"],
        ["EDB381", "Tacao"],
        ["EDC9AF", "Desert Sand"],
        ["EDCDAB", "Pancho"],
        ["EDDCB1", "Chamois"],
        ["EDEA99", "Primrose"],
        ["EDF5DD", "Frost"],
        ["EDF5F5", "Aqua Haze"],
        ["EDF6FF", "Zumthor"],
        ["EDF9F1", "Narvik"],
        ["EDFC84", "Honeysuckle"],
        ["EE82EE", "Lavender Magenta"],
        ["EEC1BE", "Beauty Bush"],
        ["EED794", "Chalky"],
        ["EED9C4", "Almond"],
        ["EEDC82", "Flax"],
        ["EEDEDA", "Bizarre"],
        ["EEE3AD", "Double Colonial White"],
        ["EEEEE8", "Cararra"],
        ["EEEF78", "Manz"],
        ["EEF0C8", "Tahuna Sands"],
        ["EEF0F3", "Athens Gray"],
        ["EEF3C3", "Tusk"],
        ["EEF4DE", "Loafer"],
        ["EEF6F7", "Catskill White"],
        ["EEFDFF", "Twilight Blue"],
        ["EEFF9A", "Jonquil"],
        ["EEFFE2", "Rice Flower"],
        ["EF863F", "Jaffa"],
        ["EFEFEF", "Gallery"],
        ["EFF2F3", "Porcelain"],
        ["F091A9", "Mauvelous"],
        ["F0D52D", "Golden Dream"],
        ["F0DB7D", "Golden Sand"],
        ["F0DC82", "Buff"],
        ["F0E2EC", "Prim"],
        ["F0E68C", "Khaki"],
        ["F0EEFD", "Selago"],
        ["F0EEFF", "Titan White"],
        ["F0F8FF", "Alice Blue"],
        ["F0FCEA", "Feta"],
        ["F18200", "Gold Drop"],
        ["F19BAB", "Wewak"],
        ["F1E788", "Sahara Sand"],
        ["F1E9D2", "Parchment"],
        ["F1E9FF", "Blue Chalk"],
        ["F1EEC1", "Mint Julep"],
        ["F1F1F1", "Seashell"],
        ["F1F7F2", "Saltpan"],
        ["F1FFAD", "Tidal"],
        ["F1FFC8", "Chiffon"],
        ["F2552A", "Flamingo"],
        ["F28500", "Tangerine"],
        ["F2C3B2", "Mandys Pink"],
        ["F2F2F2", "Concrete"],
        ["F2FAFA", "Black Squeeze"],
        ["F34723", "Pomegranate"],
        ["F3AD16", "Buttercup"],
        ["F3D69D", "New Orleans"],
        ["F3D9DF", "Vanilla Ice"],
        ["F3E7BB", "Sidecar"],
        ["F3E9E5", "Dawn Pink"],
        ["F3EDCF", "Wheatfield"],
        ["F3FB62", "Canary"],
        ["F3FBD4", "Orinoco"],
        ["F3FFD8", "Carla"],
        ["F400A1", "Hollywood Cerise"],
        ["F4A460", "Sandy brown"],
        ["F4C430", "Saffron"],
        ["F4D81C", "Ripe Lemon"],
        ["F4EBD3", "Janna"],
        ["F4F2EE", "Pampas"],
        ["F4F4F4", "Wild Sand"],
        ["F4F8FF", "Zircon"],
        ["F57584", "Froly"],
        ["F5C85C", "Cream Can"],
        ["F5C999", "Manhattan"],
        ["F5D5A0", "Maize"],
        ["F5DEB3", "Wheat"],
        ["F5E7A2", "Sandwisp"],
        ["F5E7E2", "Pot Pourri"],
        ["F5E9D3", "Albescent White"],
        ["F5EDEF", "Soft Peach"],
        ["F5F3E5", "Ecru White"],
        ["F5F5DC", "Beige"],
        ["F5FB3D", "Golden Fizz"],
        ["F5FFBE", "Australian Mint"],
        ["F64A8A", "French Rose"],
        ["F653A6", "Brilliant Rose"],
        ["F6A4C9", "Illusion"],
        ["F6F0E6", "Merino"],
        ["F6F7F7", "Black Haze"],
        ["F6FFDC", "Spring Sun"],
        ["F7468A", "Violet Red"],
        ["F77703", "Chilean Fire"],
        ["F77FBE", "Persian Pink"],
        ["F7B668", "Rajah"],
        ["F7C8DA", "Azalea"],
        ["F7DBE6", "We Peep"],
        ["F7F2E1", "Quarter Spanish White"],
        ["F7F5FA", "Whisper"],
        ["F7FAF7", "Snow Drift"],
        ["F8B853", "Casablanca"],
        ["F8C3DF", "Chantilly"],
        ["F8D9E9", "Cherub"],
        ["F8DB9D", "Marzipan"],
        ["F8DD5C", "Energy Yellow"],
        ["F8E4BF", "Givry"],
        ["F8F0E8", "White Linen"],
        ["F8F4FF", "Magnolia"],
        ["F8F6F1", "Spring Wood"],
        ["F8F7DC", "Coconut Cream"],
        ["F8F7FC", "White Lilac"],
        ["F8F8F7", "Desert Storm"],
        ["F8F99C", "Texas"],
        ["F8FACD", "Corn Field"],
        ["F8FDD3", "Mimosa"],
        ["F95A61", "Carnation"],
        ["F9BF58", "Saffron Mango"],
        ["F9E0ED", "Carousel Pink"],
        ["F9E4BC", "Dairy Cream"],
        ["F9E663", "Portica"],
        ["F9EAF3", "Amour"],
        ["F9F8E4", "Rum Swizzle"],
        ["F9FF8B", "Dolly"],
        ["F9FFF6", "Sugar Cane"],
        ["FA7814", "Ecstasy"],
        ["FA9D5A", "Tan Hide"],
        ["FAD3A2", "Corvette"],
        ["FADFAD", "Peach Yellow"],
        ["FAE600", "Turbo"],
        ["FAEAB9", "Astra"],
        ["FAECCC", "Champagne"],
        ["FAF0E6", "Linen"],
        ["FAF3F0", "Fantasy"],
        ["FAF7D6", "Citrine White"],
        ["FAFAFA", "Alabaster"],
        ["FAFDE4", "Hint of Yellow"],
        ["FAFFA4", "Milan"],
        ["FB607F", "Brink Pink"],
        ["FB8989", "Geraldine"],
        ["FBA0E3", "Lavender Rose"],
        ["FBA129", "Sea Buckthorn"],
        ["FBAC13", "Sun"],
        ["FBAED2", "Lavender Pink"],
        ["FBB2A3", "Rose Bud"],
        ["FBBEDA", "Cupid"],
        ["FBCCE7", "Classic Rose"],
        ["FBCEB1", "Apricot Peach"],
        ["FBE7B2", "Banana Mania"],
        ["FBE870", "Marigold Yellow"],
        ["FBE96C", "Festival"],
        ["FBEA8C", "Sweet Corn"],
        ["FBEC5D", "Candy Corn"],
        ["FBF9F9", "Hint of Red"],
        ["FBFFBA", "Shalimar"],
        ["FC0FC0", "Shocking Pink"],
        ["FC80A5", "Tickle Me Pink"],
        ["FC9C1D", "Tree Poppy"],
        ["FCC01E", "Lightning Yellow"],
        ["FCD667", "Goldenrod"],
        ["FCD917", "Candlelight"],
        ["FCDA98", "Cherokee"],
        ["FCF4D0", "Double Pearl Lusta"],
        ["FCF4DC", "Pearl Lusta"],
        ["FCF8F7", "Vista White"],
        ["FCFBF3", "Bianca"],
        ["FCFEDA", "Moon Glow"],
        ["FCFFE7", "China Ivory"],
        ["FCFFF9", "Ceramic"],
        ["FD0E35", "Torch Red"],
        ["FD5B78", "Wild Watermelon"],
        ["FD7B33", "Crusta"],
        ["FD7C07", "Sorbus"],
        ["FD9FA2", "Sweet Pink"],
        ["FDD5B1", "Light Apricot"],
        ["FDD7E4", "Pig Pink"],
        ["FDE1DC", "Cinderella"],
        ["FDE295", "Golden Glow"],
        ["FDE910", "Lemon"],
        ["FDF5E6", "Old Lace"],
        ["FDF6D3", "Half Colonial White"],
        ["FDF7AD", "Drover"],
        ["FDFEB8", "Pale Prim"],
        ["FDFFD5", "Cumulus"],
        ["FE28A2", "Persian Rose"],
        ["FE4C40", "Sunset Orange"],
        ["FE6F5E", "Bittersweet"],
        ["FE9D04", "California"],
        ["FEA904", "Yellow Sea"],
        ["FEBAAD", "Melon"],
        ["FED33C", "Bright Sun"],
        ["FED85D", "Dandelion"],
        ["FEDB8D", "Salomie"],
        ["FEE5AC", "Cape Honey"],
        ["FEEBF3", "Remy"],
        ["FEEFCE", "Oasis"],
        ["FEF0EC", "Bridesmaid"],
        ["FEF2C7", "Beeswax"],
        ["FEF3D8", "Bleach White"],
        ["FEF4CC", "Pipi"],
        ["FEF4DB", "Half Spanish White"],
        ["FEF4F8", "Wisp Pink"],
        ["FEF5F1", "Provincial Pink"],
        ["FEF7DE", "Half Dutch White"],
        ["FEF8E2", "Solitaire"],
        ["FEF8FF", "White Pointer"],
        ["FEF9E3", "Off Yellow"],
        ["FEFCED", "Orange White"],
        ["FF0000", "Red"],
        ["FF007F", "Rose"],
        ["FF00CC", "Purple Pizzazz"],
        ["FF00FF", "Magenta / Fuchsia"],
        ["FF2400", "Scarlet"],
        ["FF3399", "Wild Strawberry"],
        ["FF33CC", "Razzle Dazzle Rose"],
        ["FF355E", "Radical Red"],
        ["FF3F34", "Red Orange"],
        ["FF4040", "Coral Red"],
        ["FF4D00", "Vermilion"],
        ["FF4F00", "International Orange"],
        ["FF6037", "Outrageous Orange"],
        ["FF6600", "Blaze Orange"],
        ["FF66FF", "Pink Flamingo"],
        ["FF681F", "Orange"],
        ["FF69B4", "Hot Pink"],
        ["FF6B53", "Persimmon"],
        ["FF6FFF", "Blush Pink"],
        ["FF7034", "Burning Orange"],
        ["FF7518", "Pumpkin"],
        ["FF7D07", "Flamenco"],
        ["FF7F00", "Flush Orange"],
        ["FF7F50", "Coral"],
        ["FF8C69", "Salmon"],
        ["FF9000", "Pizazz"],
        ["FF910F", "West Side"],
        ["FF91A4", "Pink Salmon"],
        ["FF9933", "Neon Carrot"],
        ["FF9966", "Atomic Tangerine"],
        ["FF9980", "Vivid Tangerine"],
        ["FF9E2C", "Sunshade"],
        ["FFA000", "Orange Peel"],
        ["FFA194", "Mona Lisa"],
        ["FFA500", "Web Orange"],
        ["FFA6C9", "Carnation Pink"],
        ["FFAB81", "Hit Pink"],
        ["FFAE42", "Yellow Orange"],
        ["FFB0AC", "Cornflower Lilac"],
        ["FFB1B3", "Sundown"],
        ["FFB31F", "My Sin"],
        ["FFB555", "Texas Rose"],
        ["FFB7D5", "Cotton Candy"],
        ["FFB97B", "Macaroni and Cheese"],
        ["FFBA00", "Selective Yellow"],
        ["FFBD5F", "Koromiko"],
        ["FFBF00", "Amber"],
        ["FFC0A8", "Wax Flower"],
        ["FFC0CB", "Pink"],
        ["FFC3C0", "Your Pink"],
        ["FFC901", "Supernova"],
        ["FFCBA4", "Flesh"],
        ["FFCC33", "Sunglow"],
        ["FFCC5C", "Golden Tainoi"],
        ["FFCC99", "Peach Orange"],
        ["FFCD8C", "Chardonnay"],
        ["FFD1DC", "Pastel Pink"],
        ["FFD2B7", "Romantic"],
        ["FFD38C", "Grandis"],
        ["FFD700", "Gold"],
        ["FFD800", "School bus Yellow"],
        ["FFD8D9", "Cosmos"],
        ["FFDB58", "Mustard"],
        ["FFDCD6", "Peach Schnapps"],
        ["FFDDAF", "Caramel"],
        ["FFDDCD", "Tuft Bush"],
        ["FFDDCF", "Watusi"],
        ["FFDDF4", "Pink Lace"],
        ["FFDEAD", "Navajo White"],
        ["FFDEB3", "Frangipani"],
        ["FFE1DF", "Pippin"],
        ["FFE1F2", "Pale Rose"],
        ["FFE2C5", "Negroni"],
        ["FFE5A0", "Cream Brulee"],
        ["FFE5B4", "Peach"],
        ["FFE6C7", "Tequila"],
        ["FFE772", "Kournikova"],
        ["FFEAC8", "Sandy Beach"],
        ["FFEAD4", "Karry"],
        ["FFEC13", "Broom"],
        ["FFEDBC", "Colonial White"],
        ["FFEED8", "Derby"],
        ["FFEFA1", "Vis Vis"],
        ["FFEFC1", "Egg White"],
        ["FFEFD5", "Papaya Whip"],
        ["FFEFEC", "Fair Pink"],
        ["FFF0DB", "Peach Cream"],
        ["FFF0F5", "Lavender blush"],
        ["FFF14F", "Gorse"],
        ["FFF1B5", "Buttermilk"],
        ["FFF1D8", "Pink Lady"],
        ["FFF1EE", "Forget Me Not"],
        ["FFF1F9", "Tutu"],
        ["FFF39D", "Picasso"],
        ["FFF3F1", "Chardon"],
        ["FFF46E", "Paris Daisy"],
        ["FFF4CE", "Barley White"],
        ["FFF4DD", "Egg Sour"],
        ["FFF4E0", "Sazerac"],
        ["FFF4E8", "Serenade"],
        ["FFF4F3", "Chablis"],
        ["FFF5EE", "Seashell Peach"],
        ["FFF5F3", "Sauvignon"],
        ["FFF6D4", "Milk Punch"],
        ["FFF6DF", "Varden"],
        ["FFF6F5", "Rose White"],
        ["FFF8D1", "Baja White"],
        ["FFF9E2", "Gin Fizz"],
        ["FFF9E6", "Early Dawn"],
        ["FFFACD", "Lemon Chiffon"],
        ["FFFAF4", "Bridal Heath"],
        ["FFFBDC", "Scotch Mist"],
        ["FFFBF9", "Soapstone"],
        ["FFFC99", "Witch Haze"],
        ["FFFCEA", "Buttery White"],
        ["FFFCEE", "Island Spice"],
        ["FFFDD0", "Cream"],
        ["FFFDE6", "Chilean Heath"],
        ["FFFDE8", "Travertine"],
        ["FFFDF3", "Orchid White"],
        ["FFFDF4", "Quarter Pearl Lusta"],
        ["FFFEE1", "Half and Half"],
        ["FFFEEC", "Apricot White"],
        ["FFFEF0", "Rice Cake"],
        ["FFFEF6", "Black White"],
        ["FFFEFD", "Romance"],
        ["FFFF00", "Yellow"],
        ["FFFF66", "Laser Lemon"],
        ["FFFF99", "Pale Canary"],
        ["FFFFB4", "Portafino"],
        ["FFFFF0", "Ivory"],
        ["FFFFFF", "White"],

        ['FAEBD7', 'Antique White'],
        ['F0FFFF', 'Azure High'],
        ['FFE4C4', 'Bisque'],
        ['FFEBCD', 'Blanche Dalmond'],
        ['8A2BE2', 'Blueviolet'],
        ['A52A2A', 'Brown mandy'],
        ['DEB887', 'Burlywood'],
        ['5F9EA0', 'Cadetblue'],
        ['FFF8DC', 'Cornsilk'],
        ['00008B', 'Darkblue'],
        ['008B8B', 'Dark Cyan'],
//        'darkgoldenrod'=>'B8860B',
//        'darkgray'=>'A9A9A9',
//        'darkgreen'=>'006400',
//        'darkgrey'=>'A9A9A9',
//        'darkkhaki'=>'BDB76B',
//        'darkmagenta'=>'8B008B',
//        'darkolivegreen'=>'556B2F',
//        'darkorange'=>'FF8C00',
//        'darkorchid'=>'9932CC',
//        'darkred'=>'8B0000',
//        'darksalmon'=>'E9967A',
//        'darkseagreen'=>'8FBC8F',
//        'darkslateblue'=>'483D8B',
//        'darkslategray'=>'2F4F4F',
//        'darkslategrey'=>'2F4F4F',
//        'darkturquoise'=>'00CED1',
//        'darkviolet'=>'9400D3',
//        'deeppink'=>'FF1493',
//        'deepskyblue'=>'00BFFF',
//        'dimgray'=>'696969',
//        'dimgrey'=>'696969',
//        'dodgerblue'=>'1E90FF',
//        'firebrick'=>'B22222',
//        'floralwhite'=>'FFFAF0',
//        'forestgreen'=>'228B22',
//        'fuchsia'=>'FF00FF',
//        'gainsboro'=>'DCDCDC',
//        'ghostwhite'=>'F8F8FF',
//        'gold'=>'FFD700',
//        'goldenrod'=>'DAA520',
//        'gray'=>'808080',
//        'green'=>'008000',
//        'greenyellow'=>'ADFF2F',
//        'grey'=>'808080',
//        'honeydew'=>'F0FFF0',
//        'hotpink'=>'FF69B4',
//        'indianred'=>'CD5C5C',
//        'indigo'=>'4B0082',
//        'ivory'=>'FFFFF0',
//        'khaki'=>'F0E68C',
//        'lavender'=>'E6E6FA',
//        'lavenderblush'=>'FFF0F5',
//        'lawngreen'=>'7CFC00',
//        'lemonchiffon'=>'FFFACD',
//        'lightblue'=>'ADD8E6',
//        'lightcoral'=>'F08080',
//        'lightcyan'=>'E0FFFF',
//        'lightgoldenrodyellow'=>'FAFAD2',
//        'lightgray'=>'D3D3D3',
//        'lightgreen'=>'90EE90',
//        'lightgrey'=>'D3D3D3',
//        'lightpink'=>'FFB6C1',
//        'lightsalmon'=>'FFA07A',
//        'lightseagreen'=>'20B2AA',
//        'lightskyblue'=>'87CEFA',
//        'lightslategray'=>'778899',
//        'lightslategrey'=>'778899',
//        'lightsteelblue'=>'B0C4DE',
//        'lightyellow'=>'FFFFE0',
//        'lime'=>'00FF00',
//        'limegreen'=>'32CD32',
//        'linen'=>'FAF0E6',
//        'magenta'=>'FF00FF',
//        'maroon'=>'800000',
//        'mediumaquamarine'=>'66CDAA',
//        'mediumblue'=>'0000CD',
//        'mediumorchid'=>'BA55D3',
//        'mediumpurple'=>'9370D0',
//        'mediumseagreen'=>'3CB371',
//        'mediumslateblue'=>'7B68EE',
//        'mediumspringgreen'=>'00FA9A',
//        'mediumturquoise'=>'48D1CC',
//        'mediumvioletred'=>'C71585',
//        'midnightblue'=>'191970',
//        'mintcream'=>'F5FFFA',
//        'mistyrose'=>'FFE4E1',
//        'moccasin'=>'FFE4B5',
//        'navajowhite'=>'FFDEAD',
//        'navy'=>'000080',
//        'oldlace'=>'FDF5E6',
//        'olive'=>'808000',
//        'olivedrab'=>'6B8E23',
//        'orange'=>'FFA500',
//        'orangered'=>'FF4500',
//        'orchid'=>'DA70D6',
//        'palegoldenrod'=>'EEE8AA',
//        'palegreen'=>'98FB98',
//        'paleturquoise'=>'AFEEEE',
//        'palevioletred'=>'DB7093',
//        'papayawhip'=>'FFEFD5',
//        'peachpuff'=>'FFDAB9',
//        'peru'=>'CD853F',
//        'pink'=>'FFC0CB',
//        'plum'=>'DDA0DD',
//        'powderblue'=>'B0E0E6',
//        'purple'=>'800080',
//        'red'=>'FF0000',
//        'rosybrown'=>'BC8F8F',
//        'royalblue'=>'4169E1',
//        'saddlebrown'=>'8B4513',
//        'salmon'=>'FA8072',
//        'sandybrown'=>'F4A460',
//        'seagreen'=>'2E8B57',
//        'seashell'=>'FFF5EE',
//        'sienna'=>'A0522D',
//        'silver'=>'C0C0C0',
//        'skyblue'=>'87CEEB',
//        'slateblue'=>'6A5ACD',
//        'slategray'=>'708090',
//        'slategrey'=>'708090',
//        'snow'=>'FFFAFA',
//        'springgreen'=>'00FF7F',
//        'steelblue'=>'4682B4',
//        'tan'=>'D2B48C',
//        'teal'=>'008080',
//        'thistle'=>'D8BFD8',
//        'tomato'=>'FF6347',
//        'turquoise'=>'40E0D0',
//        'violet'=>'EE82EE',
//        'wheat'=>'F5DEB3',
//        'white'=>'FFFFFF',
//        'whitesmoke'=>'F5F5F5',
//        'yellow'=>'FFFF00',
//        'yellowgreen'=>'9ACD32'

    ];
}

/**
 * GraphOf
 *
 * @category  Class
 * @package   Utility
 * @author    AlgolTeam <algolitc@gmail.com>
 * @copyright Copyright (c) 2021
 * @link      https://github.com/algolteam
 */

class GraphOf {

    public function HexToImageColor($AColor, $AImage) {
        if (!empty($AColor) and $AImage) {
            $FColor = (new ColorOf)->info($AColor);
            return imagecolorallocate($AImage, $FColor['rgb'][0], $FColor['rgb'][1], $FColor['rgb'][2]);
        } else return null;
    }

    // filename or image size, font size, font color, background color, alignment, angle
    public function DrawTextCenter($AFileName, $AText, $AFontFile, $ASaveFile) {
        $FSaveFile = $ASaveFile;
        if (!(new StrOf)->Empty($AFileName) and !(new StrOf)->Empty($AText) and !(new StrOf)->Empty($AFontFile) and !(new StrOf)->Empty($FSaveFile)) {
            if (file_exists($FSaveFile)) unlink($FSaveFile);
            $FOptions = (new ArrayOf)->FromStringWithArray($AFileName, CH_COMMA);
            $FResource = $FOptions[0];
            $FFontSize = (new DefaultOf)->ValueCheck($FOptions[1] ?? null, 24);
            $FFontColor = (new DefaultOf)->ValueCheck($FOptions[2] ?? null, 'white');
            $FBackColor = (new DefaultOf)->ValueCheck($FOptions[3] ?? null, 'black');
            $FAlignment= (new DefaultOf)->ValueCheck($FOptions[4] ?? null, 'center middle');
            $FAngle= (new DefaultOf)->ValueCheck($FOptions[5] ?? null, 0);
            $FFontFile = realpath($AFontFile);
            $FText = mb_convert_encoding($AText, "HTML-ENTITIES", "UTF-8");
            $FExtension = (new SystemOf)->FileInfo($FResource, PATHINFO_EXTENSION);
            if (empty($FExtension)) {
                $FImageSize = (new ArrayOf)->FromStringWithArray($FResource, CH_MINUS);
                $FWidth = (new DefaultOf)->ValueCheck($FImageSize[0] ?? null, 400);
                $FHeight = (new DefaultOf)->ValueCheck($FImageSize[1] ?? null, 400);
                $img = imagecreate($FWidth, $FHeight);
                $this->HexToImageColor($FBackColor, $img);
            } elseif ((new StrOf)->Found($FExtension, ['jpg', 'jpeg'])) $img = imagecreatefromjpeg($FResource);
            elseif ((new StrOf)->Same($FExtension, 'png')) $img = imagecreatefrompng($FResource);
            elseif ((new StrOf)->Same($FExtension, 'bmp')) $img = imagecreatefrombmp($FResource);
            elseif ((new StrOf)->Same($FExtension, 'gif')) $img = imagecreatefromgif($FResource);
            elseif ((new StrOf)->Same($FExtension, 'webp')) $img = imagecreatefromwebp($FResource); else $img = null;
            if ($img) {

                $iWidth = imagesx($img);
                $iHeight = imagesy($img);
                $padding = ceil((new ValueOf)->Percent(7, 100, 0, $iWidth));

                $FText = $this->wrapText($FFontSize, $FFontFile, $FText, $iWidth - ($padding * 2), $FAngle);
                $bbox = imagettfbbox($FFontSize, $FAngle, $FFontFile, $FText);
                $baseline = abs($bbox[7]);
                $descent = abs($bbox[1]);
                $bbox_width = abs($bbox[0]) + abs($bbox[2]) + ($padding * 2) + 5;
                $bbox_height = $baseline + $descent + ($padding * 2);

                $x = $bbox[0] + $padding;
                $y = $baseline + $padding;

                if ((new StrOf)->Found($FAlignment, 'center')) $x = ceil(($iWidth - $bbox_width) / 2) + $x;
                elseif ((new StrOf)->Found($FAlignment, 'right')) $x = ($iWidth - $bbox_width) + $x;

                if ((new StrOf)->Found($FAlignment, 'middle')) $y = ceil(($iHeight - $bbox_height) / 2) + $y;
                elseif ((new StrOf)->Found($FAlignment, 'bottom')) $y = ($iHeight - $bbox_height) + $y;

                $FFontColor = $this->HexToImageColor($FFontColor, $img);

                if ((new StrOf)->Found($FAlignment, 'center')) $this->imagettftextcenter($img, $FFontSize, $x, $y, $FFontColor, $FFontFile, $FText, $FAngle);
                elseif ((new StrOf)->Found($FAlignment, 'justify')) $this->imagettftextjustified($img, $FFontSize, $x, $y, $FFontColor, $FFontFile, $FText, $FAngle);
                elseif ((new StrOf)->Found($FAlignment, 'right')) $this->imagettftextright($img, $FFontSize, $x, $y, $FFontColor, $FFontFile, $FText); else imagettftext($img, $FFontSize, $FAngle, $x, $y, $FFontColor, $FFontFile, $FText, $FAngle);

                $FExtension2 = (new SystemOf)->FileInfo($FSaveFile, PATHINFO_EXTENSION);
                if (empty($FExtension2)) {
                    $FExtension2 = empty($FExtension) ? 'jpg' : $FExtension;
                    $FSaveFile = $FSaveFile . CH_POINT . $FExtension2;
                }
                if ((new StrOf)->Same($FExtension2, 'png')) imagepng($img, $FSaveFile);
                elseif ((new StrOf)->Same($FExtension2, 'bmp')) imagebmp($img, $FSaveFile);
                elseif ((new StrOf)->Same($FExtension2, 'gif')) imagegif($img, $FSaveFile);
                elseif ((new StrOf)->Same($FExtension2, 'webp')) imagewebp($img, $FSaveFile); else imagejpeg($img, $FSaveFile);
                imagedestroy($img);
                if (!file_exists($FSaveFile)) $FSaveFile = null;
            } else $FSaveFile = null;
        } else $FSaveFile = null;
        return $FSaveFile;
    }

    private function imagettftextjustified($image, $size, $x, $y, $color, $fontfile, $text, $angle){
        // Get height of single line
        $rect = imagettfbbox($size, $angle, $fontfile, "Tq");
        $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $h1 = $maxY - $minY;

        // Get height of two lines
        $rect = imagettfbbox($size, $angle, $fontfile, "Tq\nTq");
        $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $h2 = $maxY - $minY;

        // amount of padding that should be between each line
        $vpadding = $h2 - $h1 - $h1;

        // calculate the dimensions of the text itself
        $frect = imagettfbbox($size, $angle, $fontfile, $text);
        $minX = min(array($frect[0],$frect[2],$frect[4],$frect[6]));
        $maxX = max(array($frect[0],$frect[2],$frect[4],$frect[6]));
        $text_width = $maxX - $minX;

        // left align any line whose whitespace accounts
        // for this much (percent) of the the line.
        $max_whitespace_pct = 70;

        $threshold = $text_width / 100 * $max_whitespace_pct;
        $lines = explode("\n", $text);
        foreach($lines as $line){
            $rect = imagettfbbox($size, $angle, $fontfile, $line);
            $minX = min(array($rect[0],$rect[2],$rect[4],$rect[6]));
            $maxX = max(array($rect[0],$rect[2],$rect[4],$rect[6]));
            $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
            $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));

            $line_width = $maxX - $minX;
            $line_height = $maxY - $minY;

            $words = explode(" ", $line);
            $word_width = 0;
            $word_data = array();
            foreach($words as $word){
                $rect = imagettfbbox($size, $angle, $fontfile, $word);
                $minX = min(array($rect[0],$rect[2],$rect[4],$rect[6]));
                $maxX = max(array($rect[0],$rect[2],$rect[4],$rect[6]));
                $width = $maxX - $minX;
                $word_width += $width;
                $word_data[] = array(
                    "width" => $width,
                    "word" => $word
                );
            }

            $available_space = $text_width - $word_width;
            $_x = $x;
            if($threshold > $available_space && count($words) > 1){
                $total_spaces = count($words) - 1;
                $space_size = $available_space / $total_spaces;
                foreach($word_data as $word){
                    imagettftext($image, $size, $angle, $_x, $y, $color, $fontfile, $word['word']);
                    $_x += ($space_size + $word['width']);
                }
            }else{
                imagettftext($image, $size, $angle, $_x, $y, $color, $fontfile, $line);
            }
            $y += ($line_height + $vpadding);
        }
        return $rect;
    }

    private function imagettftextcenter($image, $size, $x, $y, $color, $fontfile, $text, $angle){
        // Get height of single line
        $rect = imagettfbbox($size, $angle, $fontfile, "Tq");
        $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $h1 = $maxY - $minY;

        // Get height of two lines
        $rect = imagettfbbox($size, $angle, $fontfile, "Tq\nTq");
        $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $h2 = $maxY - $minY;

        // amount of padding that should be between each line
        $vpadding = $h2 - $h1 - $h1;

        // calculate the dimensions of the text itself
        $frect = imagettfbbox($size, $angle, $fontfile, $text);
        $minX = min(array($frect[0],$frect[2],$frect[4],$frect[6]));
        $maxX = max(array($frect[0],$frect[2],$frect[4],$frect[6]));
        $text_width = $maxX - $minX;

        $text = explode("\n", $text);
        foreach($text as $txt){
            $rect = imagettfbbox($size, $angle, $fontfile, $txt);
            $minX = min(array($rect[0],$rect[2],$rect[4],$rect[6]));
            $maxX = max(array($rect[0],$rect[2],$rect[4],$rect[6]));
            $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
            $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));

            $width = $maxX - $minX;
            $height = $maxY - $minY;

            $_x = $x + (($text_width - $width) / 2);

            imagettftext($image, $size, $angle, $_x, $y, $color, $fontfile, $txt);
            $y += ($height + $vpadding);
        }

        return $rect;
    }

    private function imagettftextright($image, $size, $x, $y, $color, $fontfile, $text, $angle){
        // Get height of single line
        $rect = imagettfbbox($size, $angle, $fontfile, "Tq");
        $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $h1 = $maxY - $minY;

        // Get height of two lines
        $rect = imagettfbbox($size, $angle, $fontfile, "Tq\nTq");
        $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));
        $h2 = $maxY - $minY;

        // amount of padding that should be between each line
        $vpadding = $h2 - $h1 - $h1;

        // calculate the dimensions of the text itself
        $frect = imagettfbbox($size, $angle, $fontfile, $text);
        $minX = min(array($frect[0],$frect[2],$frect[4],$frect[6]));
        $maxX = max(array($frect[0],$frect[2],$frect[4],$frect[6]));
        $text_width = $maxX - $minX;

        $text = explode("\n", $text);
        foreach($text as $txt){
            $rect = imagettfbbox($size, $angle, $fontfile, $txt);
            $minX = min(array($rect[0],$rect[2],$rect[4],$rect[6]));
            $maxX = max(array($rect[0],$rect[2],$rect[4],$rect[6]));
            $minY = min(array($rect[1],$rect[3],$rect[5],$rect[7]));
            $maxY = max(array($rect[1],$rect[3],$rect[5],$rect[7]));

            $width = $maxX - $minX;
            $height = $maxY - $minY;

            $_x = ($x + $text_width) - $width;

            imagettftext($image, $size, $angle, $_x, $y, $color, $fontfile, $txt);
            $y += ($height + $vpadding);
        }

        return $rect;
    }

    private function wrapText($fontSize, $fontFace, $string, $width, $angle){

        $ret = "";
        $arr = explode(" ", $string);

        foreach($arr as $word){
            $testboxWord = imagettfbbox($fontSize, $angle, $fontFace, $word);

            // huge word larger than $width, we need to cut it internally until it fits the width
            $len = strlen($word);
            while($testboxWord[2] > $width && $len > 0){
                $word = substr($word, 0, $len);
                $len--;
                $testboxWord = imagettfbbox($fontSize, $angle, $fontFace, $word);
            }

            $teststring = $ret . ' ' . $word;
            $testboxString = imagettfbbox($fontSize, $angle, $fontFace, $teststring);
            if($testboxString[2] > $width){
                $ret.=($ret == "" ? "" : "\n") . $word;
            }else{
                $ret.=($ret == "" ? "" : ' ') . $word;
            }
        }

        return $ret;
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

    public function FileExists($AFileName) {
        return file_exists($AFileName) or @fopen($AFileName, 'r');
    }

    public function FileDelete($AFileName) {
        if (isset($AFileName)) {
            $FResult  = false;
            if (is_array($AFileName)) $FFiles = $AFileName; else $FFiles = (new ArrayOf)->FromStringWithArray($AFileName, CH_COMMA);
            foreach ($FFiles as $FValue) {
                $FResult = (!empty($FValue) and is_file($FValue) and file_exists($FValue) and unlink($FValue)) or $FResult;
            }
            return $FResult;
        } else return false;
    }

    public function FileShorten($AFileName, $ALength) {
        $FFileName = trim($AFileName);
        $FLength = (new StrOf)->Length($FFileName);
        if ($FLength > $ALength) {
            $FLength = (int)($ALength / 2) - 1;
            return mb_substr($FFileName, 0, $FLength, "UTF-8") . CH_POINT . CH_POINT . CH_POINT . mb_substr($FFileName, -$FLength, $FLength, "UTF-8");
        } else return $FFileName;
    }

    public function UploadFiles($AName, $ASavePath = CH_FREE, $ATypes = null, $ASize = null, $AUniqueID = true) {
        if (isset($_FILES[$AName])) {
            $FUploadName = $_FILES[$AName]['name'];
            if (is_array($FUploadName)) {
                $FResult = null;
                foreach ($FUploadName as $FKey => $FValue) {
                    $FUploadFile = $this->UploadFilesExecute1($FValue, $_FILES[$AName]['size'][$FKey], $_FILES[$AName]['tmp_name'][$FKey], $AName, $ASavePath, $ATypes, $ASize, $AUniqueID);
                    if ($FUploadFile) $FResult[] = $FUploadFile;
                }
                return $FResult;
            } else return $this->UploadFilesExecute1($FUploadName, $_FILES[$AName]['size'], $_FILES[$AName]['tmp_name'], $AName, $ASavePath, $ATypes, $ASize, $AUniqueID);
        } else return null;
    }

    private function UploadFilesExecute1($AUploadName, $AUploadSize, $AUploadTempName, $APrefix, $ASavePath, $ATypes, $ASize, $AUniqueID) {
        $FFileName = basename($AUploadName);
        if (is_null($FFileName)) return null;
        $FExtension = $this->FileInfo($FFileName, PATHINFO_EXTENSION);
        if (!is_null($ATypes)) {
            if (!(new StrOf)->Found($FExtension, $ATypes)) return null;
        }
        if (!is_null($ASize)) {
            if ($AUploadSize > $ASize) return null;
        }
        $FSaveFile = $ASavePath;
        if ($AUniqueID) $FSaveFile .= $APrefix . (new FakerOf)->File($FExtension); else $FSaveFile .= $APrefix . CH_POINT . $FExtension;
        if (move_uploaded_file($AUploadTempName, $FSaveFile)) return $FSaveFile; else return null;
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
        $FResult = (new DefaultOf)->ValueCheck($this->getData()["message"]["contact"] ?? null, null);
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
        $FResult = $this->sendChatAction(["chat_id" => (new DefaultOf)->ValueCheck($AChatID ?? null, $this->ChatID()), "action" => $AAction]);
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) return $FResult; return null;
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
            if (is_null($AButtons)) $FResult = $this->sendMessage(["chat_id" => (new DefaultOf)->ValueCheck($AChatID ?? null, $this->ChatID()), "text" => $AText, "parse_mode" => "html"]); else $FResult = $this->sendMessage(["chat_id" => (new DefaultOf)->ValueCheck($AChatID ?? null, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, $AInline), "text" => $AText, "parse_mode" => "html"]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) {
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
            if (is_null($AButtons)) $FResult = $this->sendPhoto(["chat_id" => (new DefaultOf)->ValueCheck($AChatID ?? null, $this->ChatID()), "photo" => $APhoto, "caption" => $ACaption, "parse_mode" => "html"]); else $FResult = $this->sendPhoto(["chat_id" => (new DefaultOf)->ValueCheck($AChatID ?? null, $this->ChatID()), "reply_markup" => $this->GetBuildButtons($AButtons, $AInline), "photo" => $APhoto, "caption" => $ACaption, "parse_mode" => "html"]);
        }
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) {
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
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) {
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
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) {
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
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) {
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

        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) return $FResult; return null;
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
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) return $FResult; return null;
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
        if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) return $FResult; return null;
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
                if ((new DefaultOf)->ValueCheck($FResult["ok"] ?? null, false)) $FResult = $FResult["result"]["status"]; else $FResult = false;
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
                    $FResult .= (new DefaultOf)->ValueCheck($_SERVER['HTTP_USER_AGENT'] ?? null, CH_FREE) . (new DefaultOf)->ValueCheck($_SERVER['REMOTE_ADDR'] ?? null, CH_FREE);
                    break;
                case SOT_Dynamic:
                    $FResult .= (new DefaultOf)->ValueCheck(session_name() ?? null, CH_FREE) . (new DefaultOf)->ValueCheck(session_id() ?? null, CH_FREE);
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

    public function File($AExtension = CH_FREE, $AFormat = '%s'){
        $FResult = (new StrOf)->Replace($AFormat, '%s', uniqid(rand()));
        return $FResult . CH_POINT . $AExtension;
    }

}