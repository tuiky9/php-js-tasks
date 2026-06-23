class Solution {
    static solution(inputString) {
    let g = inputString.split('-');
    if (g.length != 6) {
        return false;
    }
    return g.filter(x => x.match(/^[0-9a-fA-F]{2}$/gm)).length === 6;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
