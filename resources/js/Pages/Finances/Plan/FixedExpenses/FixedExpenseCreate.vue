<template>
    <form v-if="isAdmin === 1" @submit.prevent="create">
      <div>
          <input v-model="form.description" type="text" placeholder="New Fixed Expense"/>
          <input v-model="form.amount" type="text" placeholder="Amount"/>
          <input v-model="form.day_due" type="text" placeholder="Day Due"/>
        <select v-model="form.frequency">
          <option>Daily</option>
          <option>Weekly</option>
          <option>Biweekly</option>
          <option>Bimonthly</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>
        <div style="display: inline-block">
          <button type="submit">&nbsp;+</button>
        </div>
      </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
defineProps({
    fixedExpense: Object,
    isAdmin: Number,    
    userId: Number,
})
const form = useForm({
    description: null,
    amount: null,
    day_due: null,
    frequency: "Monthly",
    notes: null
})
const create = () => {
    form.post('/fixedExpenses',  {preserveScroll:true});
    form.description = "";
    form.amount = "";
    form.day_due = "";
    form.frequency = "Biweekly";
    form.notes = "";
}
</script>