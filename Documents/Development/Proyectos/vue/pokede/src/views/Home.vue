<template>
  <div id="mainDiv" class="home" align="center">
  <div v-for="pokemon in pokemons" v-bind:key="pokemon">
    <div class="card border border-dark w-75">
      <div class="card-body  bg-danger d-flex  justify-content-between align-items-center">
        <div>
          <img
            :src="pokemon.sprite"
            class="rounded float-start"
            v-bind:key="pokemon.sprite"
          />
        </div>
        <div><h4>{{pokemon.name}}</h4></div>
        <div>
          <p></p>
          <input
            class="form-check-input float-end"
            type="checkbox"
            value=""
            id="flexCheckDefault"
          />
        </div>
      </div>
    </div>
    </div>
   
  </div>
</template>

<script>
  // @ is an alias to /src
  import axios from "axios";
  export default {
    name: "Home",
    data() {
      return {
        pokemons: [],
        isShown: true
      };
    },
    mounted() {
      this.getPokemons();

          },
    methods: {
      getPokemons() {
        axios.get("http://localhost:3000/pokemons").then((response) => {
          this.pokemons = response.data;
        });
      },

      // getId(event) {
      //   axios
      //     .get(`http://127.0.0.1:8000/api/events/${event.id}/subscribers`)
      //     .then((response) => {
      //       this.subscribers = response.data;
      //       this.selectedEvent = event;

      //     });
      // },

      toggleSawNewPkmn() {
        this.isShown = !this.isShown;
      },
    }
  }
</script>

<style scoped></style>
