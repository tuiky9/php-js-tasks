class Solution {
    static solution(inputString) {
    while (inputString.indexOf(")", 0) != -1) {
        var stringInParantheses = inputString.match(/\(\w{0,48}\)/).toString();
        var insideStringReversedAndTrimmed = stringInParantheses.slice(1, -1).split("").reverse().join("");
        inputString = inputString.replace(stringInParantheses, insideStringReversedAndTrimmed);
    }
    return inputString;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
