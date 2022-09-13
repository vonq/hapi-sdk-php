<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use Exception;
use HAPI\ApiHelper;
use stdClass;

class CurrencyEnum
{
    public const ADP = 'ADP';

    public const AED = 'AED';

    public const AFA = 'AFA';

    public const AFN = 'AFN';

    public const ALK = 'ALK';

    public const ALL = 'ALL';

    public const AMD = 'AMD';

    public const ANG = 'ANG';

    public const AOA = 'AOA';

    public const AOK = 'AOK';

    public const AON = 'AON';

    public const AOR = 'AOR';

    public const ARA = 'ARA';

    public const ARL = 'ARL';

    public const ARM = 'ARM';

    public const ARP = 'ARP';

    public const ARS = 'ARS';

    public const ATS = 'ATS';

    public const AUD = 'AUD';

    public const AWG = 'AWG';

    public const AZM = 'AZM';

    public const AZN = 'AZN';

    public const BAD = 'BAD';

    public const BAM = 'BAM';

    public const BAN = 'BAN';

    public const BBD = 'BBD';

    public const BDT = 'BDT';

    public const BEC = 'BEC';

    public const BEF = 'BEF';

    public const BEL = 'BEL';

    public const BGL = 'BGL';

    public const BGM = 'BGM';

    public const BGN = 'BGN';

    public const BGO = 'BGO';

    public const BHD = 'BHD';

    public const BIF = 'BIF';

    public const BMD = 'BMD';

    public const BND = 'BND';

    public const BOB = 'BOB';

    public const BOL = 'BOL';

    public const BOP = 'BOP';

    public const BOV = 'BOV';

    public const BRB = 'BRB';

    public const BRC = 'BRC';

    public const BRE = 'BRE';

    public const BRL = 'BRL';

    public const BRN = 'BRN';

    public const BRR = 'BRR';

    public const BRZ = 'BRZ';

    public const BSD = 'BSD';

    public const BTN = 'BTN';

    public const BUK = 'BUK';

    public const BWP = 'BWP';

    public const BYB = 'BYB';

    public const BYN = 'BYN';

    public const BYR = 'BYR';

    public const BZD = 'BZD';

    public const CAD = 'CAD';

    public const CDF = 'CDF';

    public const CHE = 'CHE';

    public const CHF = 'CHF';

    public const CHW = 'CHW';

    public const CLE = 'CLE';

    public const CLF = 'CLF';

    public const CLP = 'CLP';

    public const CNH = 'CNH';

    public const CNX = 'CNX';

    public const CNY = 'CNY';

    public const COP = 'COP';

    public const COU = 'COU';

    public const CRC = 'CRC';

    public const CSD = 'CSD';

    public const CSK = 'CSK';

    public const CUC = 'CUC';

    public const CUP = 'CUP';

    public const CVE = 'CVE';

    public const CYP = 'CYP';

    public const CZK = 'CZK';

    public const DDM = 'DDM';

    public const DEM = 'DEM';

    public const DJF = 'DJF';

    public const DKK = 'DKK';

    public const DOP = 'DOP';

    public const DZD = 'DZD';

    public const ECS = 'ECS';

    public const ECV = 'ECV';

    public const EEK = 'EEK';

    public const EGP = 'EGP';

    public const ERN = 'ERN';

    public const ESA = 'ESA';

    public const ESB = 'ESB';

    public const ESP = 'ESP';

    public const ETB = 'ETB';

    public const EUR = 'EUR';

    public const FIM = 'FIM';

    public const FJD = 'FJD';

    public const FKP = 'FKP';

    public const FRF = 'FRF';

    public const GBP = 'GBP';

    public const GEK = 'GEK';

    public const GEL = 'GEL';

    public const GHC = 'GHC';

    public const GHS = 'GHS';

    public const GIP = 'GIP';

    public const GMD = 'GMD';

    public const GNF = 'GNF';

    public const GNS = 'GNS';

    public const GQE = 'GQE';

    public const GRD = 'GRD';

    public const GTQ = 'GTQ';

    public const GWE = 'GWE';

    public const GWP = 'GWP';

    public const GYD = 'GYD';

    public const HKD = 'HKD';

    public const HNL = 'HNL';

    public const HRD = 'HRD';

    public const HRK = 'HRK';

    public const HTG = 'HTG';

    public const HUF = 'HUF';

    public const IDR = 'IDR';

    public const IEP = 'IEP';

    public const ILP = 'ILP';

    public const ILR = 'ILR';

    public const ILS = 'ILS';

    public const IMP = 'IMP';

    public const INR = 'INR';

    public const IQD = 'IQD';

    public const IRR = 'IRR';

    public const ISJ = 'ISJ';

    public const ISK = 'ISK';

    public const ITL = 'ITL';

    public const JMD = 'JMD';

    public const JOD = 'JOD';

    public const JPY = 'JPY';

    public const KES = 'KES';

    public const KGS = 'KGS';

    public const KHR = 'KHR';

    public const KMF = 'KMF';

    public const KPW = 'KPW';

    public const KRH = 'KRH';

    public const KRO = 'KRO';

    public const KRW = 'KRW';

    public const KWD = 'KWD';

    public const KYD = 'KYD';

    public const KZT = 'KZT';

    public const LAK = 'LAK';

    public const LBP = 'LBP';

    public const LKR = 'LKR';

    public const LRD = 'LRD';

    public const LSL = 'LSL';

    public const LTL = 'LTL';

    public const LTT = 'LTT';

    public const LUC = 'LUC';

    public const LUF = 'LUF';

    public const LUL = 'LUL';

    public const LVL = 'LVL';

    public const LVR = 'LVR';

    public const LYD = 'LYD';

    public const MAD = 'MAD';

    public const MAF = 'MAF';

    public const MCF = 'MCF';

    public const MDC = 'MDC';

    public const MDL = 'MDL';

    public const MGA = 'MGA';

    public const MGF = 'MGF';

    public const MKD = 'MKD';

    public const MKN = 'MKN';

    public const MLF = 'MLF';

    public const MMK = 'MMK';

    public const MNT = 'MNT';

    public const MOP = 'MOP';

    public const MRO = 'MRO';

    public const MRU = 'MRU';

    public const MTL = 'MTL';

    public const MTP = 'MTP';

    public const MUR = 'MUR';

    public const MVP = 'MVP';

    public const MVR = 'MVR';

    public const MWK = 'MWK';

    public const MXN = 'MXN';

    public const MXP = 'MXP';

    public const MXV = 'MXV';

    public const MYR = 'MYR';

    public const MZE = 'MZE';

    public const MZM = 'MZM';

    public const MZN = 'MZN';

    public const NAD = 'NAD';

    public const NGN = 'NGN';

    public const NIC = 'NIC';

    public const NIO = 'NIO';

    public const NLG = 'NLG';

    public const NOK = 'NOK';

    public const NPR = 'NPR';

    public const NZD = 'NZD';

    public const OMR = 'OMR';

    public const PAB = 'PAB';

    public const PEI = 'PEI';

    public const PEN = 'PEN';

    public const PES = 'PES';

    public const PGK = 'PGK';

    public const PHP = 'PHP';

    public const PKR = 'PKR';

    public const PLN = 'PLN';

    public const PLZ = 'PLZ';

    public const PTE = 'PTE';

    public const PYG = 'PYG';

    public const QAR = 'QAR';

    public const RHD = 'RHD';

    public const ROL = 'ROL';

    public const RON = 'RON';

    public const RSD = 'RSD';

    public const RUB = 'RUB';

    public const RUR = 'RUR';

    public const RWF = 'RWF';

    public const SAR = 'SAR';

    public const SBD = 'SBD';

    public const SCR = 'SCR';

    public const SDD = 'SDD';

    public const SDG = 'SDG';

    public const SDP = 'SDP';

    public const SEK = 'SEK';

    public const SGD = 'SGD';

    public const SHP = 'SHP';

    public const SIT = 'SIT';

    public const SKK = 'SKK';

    public const SLL = 'SLL';

    public const SOS = 'SOS';

    public const SRD = 'SRD';

    public const SRG = 'SRG';

    public const SSP = 'SSP';

    public const STD = 'STD';

    public const STN = 'STN';

    public const SUR = 'SUR';

    public const SVC = 'SVC';

    public const SYP = 'SYP';

    public const SZL = 'SZL';

    public const THB = 'THB';

    public const TJR = 'TJR';

    public const TJS = 'TJS';

    public const TMM = 'TMM';

    public const TMT = 'TMT';

    public const TND = 'TND';

    public const TOP = 'TOP';

    public const TPE = 'TPE';

    public const TRL = 'TRL';

    public const TRY_ = 'TRY';

    public const TTD = 'TTD';

    public const TVD = 'TVD';

    public const TWD = 'TWD';

    public const TZS = 'TZS';

    public const UAH = 'UAH';

    public const UAK = 'UAK';

    public const UGS = 'UGS';

    public const UGX = 'UGX';

    public const USD = 'USD';

    public const USN = 'USN';

    public const USS = 'USS';

    public const UYI = 'UYI';

    public const UYP = 'UYP';

    public const UYU = 'UYU';

    public const UYW = 'UYW';

    public const UZS = 'UZS';

    public const VEB = 'VEB';

    public const VEF = 'VEF';

    public const VES = 'VES';

    public const VND = 'VND';

    public const VNN = 'VNN';

    public const VUV = 'VUV';

    public const WST = 'WST';

    public const XAF = 'XAF';

    public const XAG = 'XAG';

    public const XAU = 'XAU';

    public const XBA = 'XBA';

    public const XBB = 'XBB';

    public const XBC = 'XBC';

    public const XBD = 'XBD';

    public const XCD = 'XCD';

    public const XDR = 'XDR';

    public const XEU = 'XEU';

    public const XFO = 'XFO';

    public const XFU = 'XFU';

    public const XOF = 'XOF';

    public const XPD = 'XPD';

    public const XPF = 'XPF';

    public const XPT = 'XPT';

    public const XRE = 'XRE';

    public const XSU = 'XSU';

    public const XTS = 'XTS';

    public const XUA = 'XUA';

    public const XXX = 'XXX';

    public const YDD = 'YDD';

    public const YER = 'YER';

    public const YUD = 'YUD';

    public const YUM = 'YUM';

    public const YUN = 'YUN';

    public const YUR = 'YUR';

    public const ZAL = 'ZAL';

    public const ZAR = 'ZAR';

    public const ZMK = 'ZMK';

    public const ZMW = 'ZMW';

    public const ZRN = 'ZRN';

    public const ZRZ = 'ZRZ';

    public const ZWD = 'ZWD';

    public const ZWL = 'ZWL';

    public const ZWN = 'ZWN';

    public const ZWR = 'ZWR';

    private const _ALL_VALUES = [
        self::ADP,
        self::AED,
        self::AFA,
        self::AFN,
        self::ALK,
        self::ALL,
        self::AMD,
        self::ANG,
        self::AOA,
        self::AOK,
        self::AON,
        self::AOR,
        self::ARA,
        self::ARL,
        self::ARM,
        self::ARP,
        self::ARS,
        self::ATS,
        self::AUD,
        self::AWG,
        self::AZM,
        self::AZN,
        self::BAD,
        self::BAM,
        self::BAN,
        self::BBD,
        self::BDT,
        self::BEC,
        self::BEF,
        self::BEL,
        self::BGL,
        self::BGM,
        self::BGN,
        self::BGO,
        self::BHD,
        self::BIF,
        self::BMD,
        self::BND,
        self::BOB,
        self::BOL,
        self::BOP,
        self::BOV,
        self::BRB,
        self::BRC,
        self::BRE,
        self::BRL,
        self::BRN,
        self::BRR,
        self::BRZ,
        self::BSD,
        self::BTN,
        self::BUK,
        self::BWP,
        self::BYB,
        self::BYN,
        self::BYR,
        self::BZD,
        self::CAD,
        self::CDF,
        self::CHE,
        self::CHF,
        self::CHW,
        self::CLE,
        self::CLF,
        self::CLP,
        self::CNH,
        self::CNX,
        self::CNY,
        self::COP,
        self::COU,
        self::CRC,
        self::CSD,
        self::CSK,
        self::CUC,
        self::CUP,
        self::CVE,
        self::CYP,
        self::CZK,
        self::DDM,
        self::DEM,
        self::DJF,
        self::DKK,
        self::DOP,
        self::DZD,
        self::ECS,
        self::ECV,
        self::EEK,
        self::EGP,
        self::ERN,
        self::ESA,
        self::ESB,
        self::ESP,
        self::ETB,
        self::EUR,
        self::FIM,
        self::FJD,
        self::FKP,
        self::FRF,
        self::GBP,
        self::GEK,
        self::GEL,
        self::GHC,
        self::GHS,
        self::GIP,
        self::GMD,
        self::GNF,
        self::GNS,
        self::GQE,
        self::GRD,
        self::GTQ,
        self::GWE,
        self::GWP,
        self::GYD,
        self::HKD,
        self::HNL,
        self::HRD,
        self::HRK,
        self::HTG,
        self::HUF,
        self::IDR,
        self::IEP,
        self::ILP,
        self::ILR,
        self::ILS,
        self::IMP,
        self::INR,
        self::IQD,
        self::IRR,
        self::ISJ,
        self::ISK,
        self::ITL,
        self::JMD,
        self::JOD,
        self::JPY,
        self::KES,
        self::KGS,
        self::KHR,
        self::KMF,
        self::KPW,
        self::KRH,
        self::KRO,
        self::KRW,
        self::KWD,
        self::KYD,
        self::KZT,
        self::LAK,
        self::LBP,
        self::LKR,
        self::LRD,
        self::LSL,
        self::LTL,
        self::LTT,
        self::LUC,
        self::LUF,
        self::LUL,
        self::LVL,
        self::LVR,
        self::LYD,
        self::MAD,
        self::MAF,
        self::MCF,
        self::MDC,
        self::MDL,
        self::MGA,
        self::MGF,
        self::MKD,
        self::MKN,
        self::MLF,
        self::MMK,
        self::MNT,
        self::MOP,
        self::MRO,
        self::MRU,
        self::MTL,
        self::MTP,
        self::MUR,
        self::MVP,
        self::MVR,
        self::MWK,
        self::MXN,
        self::MXP,
        self::MXV,
        self::MYR,
        self::MZE,
        self::MZM,
        self::MZN,
        self::NAD,
        self::NGN,
        self::NIC,
        self::NIO,
        self::NLG,
        self::NOK,
        self::NPR,
        self::NZD,
        self::OMR,
        self::PAB,
        self::PEI,
        self::PEN,
        self::PES,
        self::PGK,
        self::PHP,
        self::PKR,
        self::PLN,
        self::PLZ,
        self::PTE,
        self::PYG,
        self::QAR,
        self::RHD,
        self::ROL,
        self::RON,
        self::RSD,
        self::RUB,
        self::RUR,
        self::RWF,
        self::SAR,
        self::SBD,
        self::SCR,
        self::SDD,
        self::SDG,
        self::SDP,
        self::SEK,
        self::SGD,
        self::SHP,
        self::SIT,
        self::SKK,
        self::SLL,
        self::SOS,
        self::SRD,
        self::SRG,
        self::SSP,
        self::STD,
        self::STN,
        self::SUR,
        self::SVC,
        self::SYP,
        self::SZL,
        self::THB,
        self::TJR,
        self::TJS,
        self::TMM,
        self::TMT,
        self::TND,
        self::TOP,
        self::TPE,
        self::TRL,
        self::TRY_,
        self::TTD,
        self::TVD,
        self::TWD,
        self::TZS,
        self::UAH,
        self::UAK,
        self::UGS,
        self::UGX,
        self::USD,
        self::USN,
        self::USS,
        self::UYI,
        self::UYP,
        self::UYU,
        self::UYW,
        self::UZS,
        self::VEB,
        self::VEF,
        self::VES,
        self::VND,
        self::VNN,
        self::VUV,
        self::WST,
        self::XAF,
        self::XAG,
        self::XAU,
        self::XBA,
        self::XBB,
        self::XBC,
        self::XBD,
        self::XCD,
        self::XDR,
        self::XEU,
        self::XFO,
        self::XFU,
        self::XOF,
        self::XPD,
        self::XPF,
        self::XPT,
        self::XRE,
        self::XSU,
        self::XTS,
        self::XUA,
        self::XXX,
        self::YDD,
        self::YER,
        self::YUD,
        self::YUM,
        self::YUN,
        self::YUR,
        self::ZAL,
        self::ZAR,
        self::ZMK,
        self::ZMW,
        self::ZRN,
        self::ZRZ,
        self::ZWD,
        self::ZWL,
        self::ZWN,
        self::ZWR,
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
