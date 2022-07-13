const app = new Vue({
 el: '#app',
 data: {
  selectedGenre: '',
  database: [],
 },
 methods: {
  getDb() {
   this.database = axios.get(`./db.php?genre=${this.selectedGenre}`)
    .then(response => {
     this.database = response.data;
    });
    console.log(this.database);
  },
 },
 mounted() {

  this.database = axios.get(`./db.php`)
   .then(response => {
    this.database = response.data;
   });
 }
});

