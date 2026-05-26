function deepMerge(left, right) {
    const copyValue = (value) => {
        if (Array.isArray(value)) {
            return value.map((item) => (isMergeable(item) ? copyValue(item) : item));
        }

        if (isPlainObject(value)) {
            const copy = {};

            for (const key of Object.keys(value)) {
                copy[key] = isMergeable(value[key]) ? copyValue(value[key]) : value[key];
            }

            return copy;
        }

        return value;
    };

    const result = copyValue(left);

    for (const key of Object.keys(right)) {
        if (
            Object.prototype.hasOwnProperty.call(result, key)
            && shouldRecurse(result[key], right[key])
        ) {
            result[key] = deepMerge(result[key], right[key]);
            continue;
        }

        result[key] = isMergeable(right[key]) ? copyValue(right[key]) : right[key];
    }

    return result;
}

function isPlainObject(value) {
    return value !== null && typeof value === 'object' && !Array.isArray(value);
}

function isMergeable(value) {
    return isPlainObject(value) || Array.isArray(value);
}

function isList(value) {
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

function shouldRecurse(left, right) {
    if (!isMergeable(left) || !isMergeable(right)) {
        return false;
    }

    if (Array.isArray(left) && Array.isArray(right)) {
        return !isList(left) && !isList(right);
    }

    if (Array.isArray(left) || Array.isArray(right)) {
        return false;
    }

    return true;
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { deepMerge };
}
