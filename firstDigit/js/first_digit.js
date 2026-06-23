class Solution {
    static solution($inputString) {
    preg_match('/\d/', $inputString, $match);
    return $match[0];
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
