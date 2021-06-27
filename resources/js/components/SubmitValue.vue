<template>
  <div class="row mt-2">
    <div class="col-sm-2"></div>
    <div
      class="col-sm-8 d-flex justify-content-center align-items-sm-center gray-dark"
    >
      <form
        @submit.prevent="salvar()"
        class="d-flex align-items-center justify-content-center"
      >
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">R$</span>
          </div>
          <input
            type="number"
            class="form-control"
            aria-describedby="basic-addon3"
            v-model="transaction.amount"
          />
        </div>
        <div class="form-check ml-3">
          <input
            class="form-check-input"
            type="radio"
            name="exampleRadios"
            value="1"
            v-model="transaction.type"
            checked
          />
          <label class="form-check-label text-light" for="exampleRadios1">
            Deposito
          </label>
        </div>
        <div class="form-check ml-3">
          <input
            class="form-check-input"
            type="radio"
            name="exampleRadios"
            v-model="transaction.type"
            value="2"
          />
          <label class="form-check-label text-light" for="exampleRadios2">
            Retirada
          </label>
        </div>
        <button type="submit" class="btn btn-primary ml-4">
          Submit
        </button>
      </form>
    </div>
    <div class="col-sm-2"></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      transaction: {}
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    salvar() {
      const data = {
        amount: this.transaction.amount,
        type: this.transaction.type,
        title: this.transaction.type === "1" ? "Deposito" : "Retirada",
        slug: this.transaction.type === "1" ? "income" : "outcome"
      };
      axios
        .post("http://localhost:8800/api/transactions", data)
        .then(response => {
          console.log(response);
          this.transaction = {
            amount: response.data.amount,
            type: response.data.type
          };
        })
        .catch(error => console.log(error, "Aqui"));
    }
  }
};
</script>
