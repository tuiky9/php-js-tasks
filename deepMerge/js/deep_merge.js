class Solution {
    static solution(left, right) {
        const copyValue = (value) => {
            if (Array.isArray(value)) {
                return value.map((item) => (Solution.isMergeable(item) ? copyValue(item) : item));
            }

            if (Solution.isPlainObject(value)) {
                const copy = {};

                for (const key of Object.keys(value)) {
                    copy[key] = Solution.isMergeable(value[key]) ? copyValue(value[key]) : value[key];
                }

                return copy;
            }

            return value;
        };

        const result = copyValue(left);

        for (const key of Object.keys(right)) {
            if (
                Object.prototype.hasOwnProperty.call(result, key)
                && Solution.shouldRecurse(result[key], right[key])
            ) {
                result[key] = Solution.solution(result[key], right[key]);
                continue;
            }

            result[key] = Solution.isMergeable(right[key]) ? copyValue(right[key]) : right[key];
        }

        return result;
    }

    static isPlainObject(value) {
        return value !== null && typeof value === 'object' && !Array.isArray(value);
    }

    static isMergeable(value) {
        return Solution.isPlainObject(value) || Array.isArray(value);
    }

    static isList(value) {
        if (!Array.isArray(value)) {
            return false;
        }

        for (let i = 0; i < value.length; i++) {
            if (!Object.prototype.hasOwnProperty.call(value, i)) {
                return false;
            }
        }

        return true;
    }

    static shouldRecurse(left, right) {
        if (!Solution.isMergeable(left) || !Solution.isMergeable(right)) {
            return false;
        }

        if (Array.isArray(left) && Array.isArray(right)) {
            return !Solution.isList(left) && !Solution.isList(right);
        }

        if (Array.isArray(left) || Array.isArray(right)) {
            return false;
        }

        return true;
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
