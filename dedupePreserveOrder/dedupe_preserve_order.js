function dedupePreserveOrder(items) {
    const seen = [];
    const result = [];

    for (const item of items) {
        if (seen.some((s) => Object.is(s, item))) {
            continue;
        }
        seen.push(item);
        result.push(item);
    }

    return result;
}
