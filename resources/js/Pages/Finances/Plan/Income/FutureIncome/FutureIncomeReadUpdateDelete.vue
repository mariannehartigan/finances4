<template>
  <div v-if="incomeId===futureIncome.income_id">
    <form @input="update">
      <input v-model="form.amount" type="text" :readonly="isAdmin === 0"/>
      <input v-model="form.effective_date" type="text" :readonly="isAdmin === 0"/>
      <input v-model="form.notes" type="text" :readonly="isAdmin === 0"/>
    </form>
    <div v-show="isAdmin">
    <Link :href="`/futureIncome/${props.futureIncome.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete</Link>
    </div>
  </div>
</template>

<script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  const props = defineProps({
    futureIncome: Object,
    incomeId: Number,
    isAdmin: Number,
  })
  const form = useForm({
    amount: props.futureIncome.amount,
    effective_date: props.futureIncome.effective_date,
    notes: props.futureIncome.notes,
  })
  const update = () => {
    if(props.isAdmin) {
      form.put(`/futureIncome/${props.futureIncome.id}`, {preserveScroll:true})
    }
  }
</script>