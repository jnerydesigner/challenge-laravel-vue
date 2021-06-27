<template>
  <ul class="list-group">
    <li
      v-for="transaction in transactions"
      :key="transaction.id"
      class="list-group-item d-flex justify-content-between"
      :class="getClassGroup(transaction.type)"
    >
      <span class="align-self-center">{{ transaction.title }}</span>
      <span class="align-self-center">R$ {{ transaction.amount }}</span>
      <span class="align-self-center">{{ transaction.created_at }}</span>

      <i class="bi" :class="getIcon(transaction.type)"></i>
    </li>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      transactions: []
    };
  },
  mounted() {
    this.getTransactions();
  },
  methods: {
    getIcon(type) {
      if (type === 1) {
        return "bi-arrow-up-circle-fill";
      } else {
        return "bi-arrow-down-circle-fill";
      }
    },
    getClassGroup(type) {
      if (type === 1) {
        return "income-icon-group";
      } else {
        return "outcome-icon-group";
      }
    },
    getTransactions() {
      axios
        .get("http://localhost:8800/api/transactions")
        .then(response => {
          this.transactions = response.data;
        })
        .catch(error => console.log(error))
        .then(() => {
          //
        });
    }
  }
};
</script>
