<template>
    <div class="row mt-2">
        <div class="col-sm d-flex justify-content-around gray-dark">
            <div class="card" style="width: 18rem;">
                <div
                    class="card-body income bg-green-flat d-flex flex-column justify-content-center align-items-center"
                >
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ uniqueTypesDeposit.title }}
                    </h6>
                    <h1 class="card-title">R$ {{ sumTypesDeposit }}</h1>
                    <i class="bi bi-arrow-up-circle-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-sm d-flex justify-content-around gray-dark">
            <div class="card" style="width: 18rem;">
                <div
                    class="card-body outcome bg-orange-view d-flex flex-column justify-content-center align-items-center"
                >
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ uniqueTypesWithdrawal.title }}
                    </h6>
                    <h1 class="card-title">R$ {{ sumTypesWithdrawal }}</h1>
                    <i class="bi bi-arrow-down-circle-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-sm d-flex justify-content-around gray-dark">
            <div class="card" style="width: 18rem;">
                <div
                    class="card-body sold bg-eletric-blue d-flex flex-column justify-content-center align-items-center"
                >
                    <h6 class="card-subtitle mb-2 text-muted">
                        Saldo
                    </h6>
                    <h1 class="card-title">R$ {{ totalOperations }}</h1>
                    <i class="bi bi-currency-dollar"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            sumTypesDeposit: null,
            sumTypesWithdrawal: null,
            uniqueTypesWithdrawal: null,
            uniqueTypesDeposit: null,
            totalOperations: null
        };
    },
    mounted() {
        this.getSumTypesDeposit();
        this.getSumTypesWithdrawal();
        this.getUniqueTypesWithdrawal();
        this.getUniqueTypesDeposit();
        this.getSolds();
    },
    methods: {
        getSumTypesDeposit() {
            axios
                .get("http://localhost:8800/api/transactions/count/1")
                .then(response => {
                    this.sumTypesDeposit = response.data;
                })
                .catch(error => console.log(error))
                .then(() => {
                    //
                });
        },
        getSumTypesWithdrawal() {
            axios
                .get("http://localhost:8800/api/transactions/count/2")
                .then(response => {
                    this.sumTypesWithdrawal = response.data;
                })
                .catch(error => console.log(error))
                .then(() => {
                    //
                });
        },
        getUniqueTypesWithdrawal() {
            axios
                .get("http://localhost:8800/api/transactions/unique/2")
                .then(response => {
                    this.uniqueTypesWithdrawal = response.data;
                })
                .catch(error => console.log(error))
                .then(() => {
                    //
                });
        },
        getUniqueTypesDeposit() {
            axios
                .get("http://localhost:8800/api/transactions/unique/1")
                .then(response => {
                    this.uniqueTypesDeposit = response.data;
                })
                .catch(error => console.log(error))
                .then(() => {
                    //
                });
        },
        getSolds() {
            axios
                .get("http://localhost:8800/api/transactions/total/1")
                .then(response => {
                    this.totalOperations = response.data;
                })
                .catch(error => console.log(error))
                .then(() => {
                    //
                });
        }
    }
};
</script>
