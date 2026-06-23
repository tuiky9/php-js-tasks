class Solution {
    static solution(sorted, target) {
        let left = 0;
        let right = sorted.length - 1;
        let result = -1;

        while (left <= right) {
            const mid = left + Math.floor((right - left) / 2);

            if (sorted[mid] === target) {
                result = mid;
                right = mid - 1;
            } else if (sorted[mid] < target) {
                left = mid + 1;
            } else {
                right = mid - 1;
            }
        }

        return result;
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
