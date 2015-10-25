/*!
 * ks-form - v0.0.2 - 2015-03-11
 * https://github.com/ks-frontend/ks-form
 * Copyright (c) 2015 
 * Licensed ISC
 */
// Forms
// Disable browser default validation
$("form").attr('novalidate', "");

// _strategy_max.js ------------------------------------------
function ks_strategy_max(param, elementObject)
{
    // console.log(elementObject);
}

// _strategy-maxlength.js ------------------------------------------
function ks_strategy_maxlength(param, elementObject)
{
    // console.log("maxlength: " + param);
}
// _strategy-min.js ------------------------------------------
function ks_strategy_min(param, elementObject)
{
    // console.log("min: " + param);
}

// _strategy-required.js ------------------------------------------
function ks_strategy_required(param, elementObject)
{
    // console.log("required: " + param);
}
