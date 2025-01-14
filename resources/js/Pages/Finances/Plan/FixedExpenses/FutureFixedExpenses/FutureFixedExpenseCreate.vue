<template>
    <form @submit.prevent="create">
      <input v-model="form.amount" type="text" placeholder="amount"/>
      <input v-model="form.effective_date" type="text" placeholder="date"/>
      <input v-model="form.notes" type="text" placeholder="notes"/>
      <button type="submit">Create Future Income</button>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
    fixedExpenseId: Number,
})
const form = useForm({
  amount: null,
  effective_date: null,
  notes: null,
  fixed_expense_id: props.fixedExpenseId,
  })
const create = () => {
    form.post(`/futureFixedExpenses`, {preserveScroll:true});
    form.amount = "";
    form.effective_date = "";
    form.notes = "";
}
</script>