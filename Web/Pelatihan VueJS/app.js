new Vue({
    el: "#app",
    data: {
        title: "Vue JS Basic",
        name: ['Atma', 'Iqbal'],
        namaSatu: 'Iqbal'


    },
    methods: {
        greet(time) {
            //greet : nama method, time sebagai parameter.
            //` untuk string format
            return `Hello and good ${time}, ${this.name[1]} ${this.name[0]}`
        },
        umur(umur_) {
            return `Umur ${this.name[1]} adalah ${umur_}`
        },
        penjumlahan(a, b) {
            return `${a} + ${b} =  ${a+b}`
        },
    }
});