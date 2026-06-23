class Solution {
    static solution(inputArray, elemToReplace, substitutionElem) {
    return inputArray.map((ielem, i) => ielem === elemToReplace ? substitutionElem : ielem);

}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
