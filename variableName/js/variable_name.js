class Solution {
    static solution(name) {
return name.split('')[0].match(/^[a-zA-Z_]/g) != null && (name.length == 1 || name.slice(1).match(/^\w+$/mg) != null);
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
