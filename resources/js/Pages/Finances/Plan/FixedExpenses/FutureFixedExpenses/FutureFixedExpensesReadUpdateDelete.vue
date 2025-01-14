<template>
    <div v-if="expenseId===futureIncome.income_id">
      <form @input="update">
        <input v-model="form.amount" type="text" :readonly="isAdmin === 0"/>
        <input v-model="form.effective_date" type="text" :readonly="isAdmin === 0"/>
        <input v-model="form.notes" type="text" :readonly="isAdmin === 0"/>
      </form>
      <div v-show="isAdmin">
      <Link :href="`/futureIncome/${props.futureIncome.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete Future Income</Link>
      </div>
    </div>
  </template>
  
  <script setup>
    import { useForm } from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
    const props = defineProps({
      futureFixedExpense: Object,
      expenseId: Number,
      isAdmin: Number,
    })
    const form = useForm({
      amount: props.futureFixedExpense.amount,
      effective_date: props.futureFixedExpense.effective_date,
      notes: props.futureFixedExpense.notes,
    })
    const update = () => {
      if(props.isAdmin) {
        form.put(`/futureFixedExpenses/${props.futureFixedExpense.id}`, {preserveScroll:true})
      }
    }
  </script>