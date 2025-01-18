<template>
    <form @submit.prevent="create">
      <input v-model="form.amount" type="text" placeholder="amount"/>
      <input v-model="form.effective_date" type="text" placeholder="date"/>
      <button type="submit">&nbsp;+</button>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
    variableExpenseId: Number,
})
const form = useForm({
  amount: null,
  effective_date: null,
  variable_expense_id: props.variableExpenseId,
  })
const create = () => {
    form.post(`/futureVariableExpenses`, {preserveScroll:true});
    form.amount = "";
    form.effective_date = "";
}
</script>
