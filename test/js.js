a = 1;
b = function () {
    a++;
};
b();
b();
console.log(a);

let j;
for (let i in [1,2,3,4]){
    console.log(i);
    j = i;
}
console.log(j);
