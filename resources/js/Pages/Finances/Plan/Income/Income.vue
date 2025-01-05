<template>

  <IncomeUpdate v-for="income in incomes" :key="income.id" :income="income" :futureIncomes="$page.props.futureIncomes"/>

  <form @submit.prevent="create">
    <div>
        <input v-model="form.description" type="text" placeholder="Description"/>
        <input v-model="form.amount" type="text" placeholder="Amount"/>
        <input v-model="form.day_deposited" type="text" placeholder="Day Deposited"/>
      <select v-model="form.frequency">
        <option>Biweekly</option>
        <option>Bimonthly</option>
        <option>Monthly</option>
        <option>Quarterly</option>
        <option>Yearly</option>
      </select>
      <div>
        <button type="submit">Create Income</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import IncomeUpdate from './IncomeUpdate.vue';
defineProps({
  incomes: Object,
  futureIncomes: Array,
})
const form = useForm({
  description: null,
  amount: null,
  day_deposited: null,
  frequency: "Biweekly",
  notes: null
  })
const create = () => {
  form.post('/income',  {preserveScroll:true});
  form.description = "";
  form.amount = "";
  form.frequency = "Biweekly";
  form.day_deposited = "";
}
</script>
