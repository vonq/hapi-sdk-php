
# Rule Enum

lower/higher: value for this facet should be lower/higher than or equal to the value for referred facet

before/after: value for this facet should be before/after than or equal to the value for referred facet. Both facets are dates

url: value should be a valid URL

be-pc: Belgium postal code

belgium/de/dutch-city: Belgium/German/Dutch city

nl-pc, np-pc-straat: Dutch postal code, for nl-pc PO-boxes are not valid

isodateoptional: date formatted "Y-m-d", "Y-md H:i" or "Y-m-d H:i:s"

maxlengthcombined: (only used for type TEXTEXPAND) maximum length for all inputs combined to one string

separator: (only used for type TEXTEXPAND) string used to combine

maxlevels: maximum depth of a HIER

propertyId: only used internally

pushvalue: only used internally

validator:notEmptyIf: facet depends on vacancyvalue (exposed in API by required-tag in
[OptionsFacet](https://vonq.stoplight.io/docs/hapi/branches/2.1/6f1768e932ab5-facet-option) )

## Enumeration

`RuleEnum`

## Fields

| Name |
|  --- |
| `DATE` |
| `EMAIL` |
| `INT` |
| `FLOAT` |
| `REGEX` |
| `LOWER` |
| `HIGHER` |
| `MIN` |
| `MAX` |
| `MINITEMS` |
| `MAXITEMS` |
| `MINLENGTH` |
| `MAXLENGTH` |
| `BEFORE` |
| `AFTER` |
| `URL` |
| `BEPC` |
| `BELGIUMCITY` |
| `DECITY` |
| `DUTCHCITY` |
| `ISODATEOPTIONALTIE` |
| `MAXLENGTHCOMBINED` |
| `MAXLEVELS` |
| `NLPC` |
| `NLPCSTRAAT` |
| `NOTEQUAL` |
| `PROPERTYID` |
| `PUSHVALUE` |
| `SEPARATOR` |
| `UKPC` |
| `ENUM_VALIDATORCHECKKEYWORDS` |
| `ENUM_VALIDATORINRANGE` |
| `ENUM_VALIDATORKRUISPUNT` |
| `ENUM_VALIDATORNOTEMPTYIF` |
| `NOTEMPTY` |
| `EQUAL` |
| `IN` |

## Example

```
date
```

