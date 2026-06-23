class Solution {
    static solution(inputString) {
  
  let countedEle = inputString.split('').reduce(function (a, v) {v in a ? a[v]++ : a[v] = 1; return a;}, {});
  let f = inputString.length%2 == 0?1:0;
  
  for(var k in countedEle){
  countedEle[k] % 2 != 0 ? f++ : 0;
  }
  
  return f < 2;
}
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Solution };
}
