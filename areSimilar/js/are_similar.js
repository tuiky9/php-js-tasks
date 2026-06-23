class Solution {
    static solution(a, b) {
    let diffrence = [];
    for (var i = 0; i < a.length; i++) {
        if (a[i] != b[i]) {
            diffrence.push([a[i], b[i]]);
        }
    }
    if (diffrence.length == 0) {
        return true;
    }
    if (diffrence.length < 3) {
        return JSON.stringify(diffrence[0].sort()) == JSON.stringify(diffrence[1].sort());
    }
    return false
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
