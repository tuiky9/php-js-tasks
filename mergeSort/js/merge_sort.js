class Solution {
    static solution(array) {
        if (array.length <= 1) {
            return array;
        }

        const middle = Math.floor(array.length / 2);
        const left = array.slice(0, middle);
        const right = array.slice(middle);

        return Solution.merge(
            Solution.solution(left),
            Solution.solution(right)
        );
    }

    static merge(left, right) {
        const result = [];
        let leftIndex = 0;
        let rightIndex = 0;

        while (leftIndex < left.length && rightIndex < right.length) {
            if (left[leftIndex] <= right[rightIndex]) {
                result.push(left[leftIndex]);
                leftIndex++;
            } else {
                result.push(right[rightIndex]);
                rightIndex++;
            }
        }

        while (leftIndex < left.length) {
            result.push(left[leftIndex]);
            leftIndex++;
        }

        while (rightIndex < right.length) {
            result.push(right[rightIndex]);
            rightIndex++;
        }

        return result;
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
