function makeArrayConsecutive2(statues) {
    const allStatues = [];

    for (let i = Math.min(...statues); i <= Math.max(...statues); i++) {
        allStatues.push(i);
    }

    return allStatues.filter((s) => !statues.includes(s)).length;
}
