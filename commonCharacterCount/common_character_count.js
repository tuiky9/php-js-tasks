function commonCharacterCount(s1, s2) {
    const s2len = s2.length;

    for (const v of s1) {
        const idx = s2.indexOf(v);
        if (idx !== -1) {
            s2 = s2.slice(0, idx) + s2.slice(idx + 1);
        }
    }

    return s2len - s2.length;
}
