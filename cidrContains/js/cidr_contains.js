class Solution {
    static solution(ip, cidr) {
        const toLong = (address) => {
            const octets = address.split('.').map(Number);

            return ((octets[0] << 24) | (octets[1] << 16) | (octets[2] << 8) | octets[3]) >>> 0;
        };

        const slash = cidr.indexOf('/');
        const network = cidr.slice(0, slash);
        const prefix = parseInt(cidr.slice(slash + 1), 10);

        if (prefix === 0) {
            return true;
        }

        const ipLong = toLong(ip);
        const netLong = toLong(network);

        if (prefix === 32) {
            return ipLong === netLong;
        }

        const mask = (0xFFFFFFFF << (32 - prefix)) >>> 0;

        return ((ipLong & mask) >>> 0) === ((netLong & mask) >>> 0);
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
