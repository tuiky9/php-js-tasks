class Solution {
    static solution(phpDoc) {
    return phpDoc.replace(/\$([a-z][a-z0-9]*(?:_[a-z][a-z0-9]*)*)/g, (match, name) => {
        const parts = name.split('_');
        const camel =
            parts.shift() +
            parts.map((part) => part.charAt(0).toUpperCase() + part.slice(1)).join('');
        return '$' + camel;
    });
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
