class Solution {
    static solution(picture) {
    picture.forEach((v, i) => picture[i] = "*" + v + "*");
    let astersiks = "*".repeat(picture[0].length);
    picture.push(astersiks);
    picture.unshift(astersiks);
    return picture;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
