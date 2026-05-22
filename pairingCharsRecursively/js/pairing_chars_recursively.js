function solve(s) {
    if (s.length <= 1) {
        return s;
    }

    return s[0] + s[s.length - 1] + solve(s.slice(1, -1));
}
