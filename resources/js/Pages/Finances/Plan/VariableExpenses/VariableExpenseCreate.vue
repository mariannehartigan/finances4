<template>
    <form v-if="isAdmin === 1" @submit.prevent="create">
      <div>
          <input v-model="form.description" type="text" placeholder="Description"/>
          <input v-model="form.amount" type="text" placeholder="Amount"/>
        <select v-model="form.frequency">
          <option>Daily</option>
          <option>Weekly</option>
          <option>Biweekly</option>
          <option>Bimonthly</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>
        <div>
          <button type="submit">Create Variable Expense</button>
        </div>
      </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
defineProps({
    variableExpense: Object,
    isAdmin: Number,
})
const form = useForm({
    description: null,
    amount: null,
    frequency: "Weekly",
})
const create = () => {
    form.post('/variableExpenses',  {preserveScroll:true});
    form.description = "";
    form.amount = "";
    form.frequency = "Weekly";
}
</script>