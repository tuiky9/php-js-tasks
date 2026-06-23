class Solution {
    static solution(title) {
    let slug = title.toLowerCase();
    slug = slug.replace(/[^a-z0-9]+/g, '-');
    return slug.replace(/^-+|-+$/g, '');
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
