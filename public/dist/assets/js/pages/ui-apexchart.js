function salesPerDayArea(transactions) {
  const thisMonth = new Date().getMonth() + 1
  const monthName = new Date().toLocaleString('default', { month: 'long' })

  const filterMonthResult = filterMonth(transactions, thisMonth)

  $('#month-toggle').text(`${monthName}`)

  $(`.dropdown-menu > li:nth-child(${thisMonth})`).children().addClass('active')

  const options = salesContinueOptions(filterMonthResult)
  const lineOptions = salesContinueLineChartOptions(options)
  const barOptions = salesContinueBarChartOptions(options)

  // Create chart instance
  const chart = new ApexCharts(
    document.querySelector('#sales-per-day'),
    lineOptions
  )

  // Render chart
  chart.render()

  $('#srp-line-chart-radio').on('click', function () {
    chart.updateOptions(checkLogarithmic(lineOptions))
  })

  $('#srp-area-chart-radio').on('click', function () {
    chart.updateOptions(checkLogarithmic(options))
  })

  $('#srp-bar-chart-radio').on('click', function () {
    chart.updateOptions(checkLogarithmic(barOptions))
  })

  $('#srp-log-radio').on('click', function (e) {
    logarithmicRadio(chart, e)
  })

  $('.dropdown-item').on('click', function (e) {
    const month = $(this).data('month')
    $(`.dropdown-menu > li > a`).removeClass('active')
    $(this).addClass('active')

    chart.updateOptions(salesContinueOptions(filterMonth(transactions, month)))
    $('#month-toggle').text(`${$(this).text()}`)
  })
}

function salesPerMonth(transactions) {
  const salesPerMonth = salesMonthSum(transactions)

  const options = salesContinueMonthOptions(salesPerMonth)
  const lineOptions = salesContinueLineChartOptions(options)
  const barOptions = salesContinueBarChartOptions(options)

  // Create chart instance
  const chart = new ApexCharts(
    document.querySelector('#sales-per-month'),
    options
  )

  // Render chart
  chart.render()

  $('#spm-line-chart-radio').on('click', function () {
    chart.updateOptions(checkLogarithmic(lineOptions))
  })

  $('#spm-area-chart-radio').on('click', function () {
    chart.updateOptions(checkLogarithmic(options))
  })

  $('#spm-bar-chart-radio').on('click', function () {
    chart.updateOptions(checkLogarithmic(barOptions))
  })

  $('#spm-log-radio').on('click', function (e) {
    logarithmicRadio(chart, e)
  })
}

function salesPerCustomerChart(transactions) {
  var options = {
    toolbar: {
      show: true
    },
    series: [
      {
        data: transactions.map((transaction) => {
          return {
            x: transaction.customer.name,
            y: parseFloat(
              transaction.customer.subtotal.replace(/\./g, '').replace(',', '.')
            )
          }
        })
      }
    ],
    legend: {
      show: true
    },
    chart: {
      height: 350,
      type: 'treemap'
    },
    dataLabels: {
      enabled: true,
      style: {
        fontSize: '12px'
      },
      formatter: function (text, op) {
        return [text, toRupiah(op.value)]
      },
      offsetY: -4
    },
    tooltip: {
      y: {
        formatter: (value) => {
          return toRupiah(value)
        }
      }
    },
    yaxis: {
      logarithmic: true
    },
  }

  const chart = new ApexCharts(document.querySelector('#customer'), options)
  chart.render()
}

function salesPerProductChart(transactions) {
  const sorted = transactions.sort((a, b) => {
    return (
      parseFloat(
        b.sales_by_products.reports.grand_total.value_sold.replace(/\./g, '').replace(',', '.')
      ) -
      parseFloat(
        a.sales_by_products.reports.grand_total.value_sold.replace(/\./g, '').replace(',', '.')
      )
    )
  })

  var optionsFirstHalf = {
    series: [
      {
        data: sorted.map((transaction) => {
          return parseFloat(
            transaction.sales_by_products.reports.grand_total.value_sold.replace(/\./g, '').replace(',', '.')
          )
        }),
        name: 'Total'
      }
    ],
    chart: {
      type: 'bar',
      height: 500,
      toolbar: {
        show: true,
        tools: {
          download: true,
          selection: true,
          zoom: true,
          zoomin: true,
          zoomout: true,
          pan: true,
          reset: true | '<img src="/static/icons/reset.png" width="20">'
        }
      }
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: false
      }
    },
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: transactions.map(
        (transaction) => transaction.product_category_name
      ),
      sorted: true,
      tickPlacement: 'on'
    },
    yaxis: {
      labels: {
        formatter: (value) => {
          return toRupiah(value)
        }
      },
    },
    tooltip: {
      y: {
        formatter: (value) => {
          return toRupiah(value)
        }
      }
    }
  }

  const chartFirstHalf = new ApexCharts(
    document.querySelector('#product50'),
    optionsFirstHalf
  )

  chartFirstHalf.render()

  $('#spp50-log-radio').on('click', function (e) {
    logarithmicRadio(chartFirstHalf, e)
  })
}

// OPTIONS

function salesContinueOptions(result) {
  const options = {
    chart: {
      height: 350,
      type: 'area'
    },
    series: [
      {
        name: 'Total',
        data: result.map((transaction) => transaction.total)
      }
    ],
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: result.map((transaction) => new Date(transaction.date).toLocaleDateString('id-ID')),
      labels: {
        datetimeFormatter: {
          day: 'dd MMM yyyy'
        }
      }
    },
    yaxis: {
      labels: {
        formatter: (value) => {
          return toRupiah(value)
        }
      }
    },
    tooltip: {
      x: {
        format: 'dd MMM yyyy'
      },
      y: {
        formatter: (value) => {
          return toRupiah(value)
        }
      }
    },
    stroke: {
      curve: 'smooth'
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.2,
        opacityFrom: 0.7,
        opacityTo: 0.2,
        stops: [0, 90, 100],
        type: 'vertical'
      }
    },
    noData: {
      text: 'No data available',
      align: 'center',
      verticalAlign: 'middle',
      offsetX: 0,
      offsetY: 0,
    }
  }

  return options
}

function salesContinueMonthOptions(result) {
  const options = salesContinueOptions(result)
  
  const monthOptions = {
    ...options,
    xaxis: {
      ...options.xaxis,
      categories: result.map((transaction) => transaction.date),
    }
  }

  return monthOptions
}

function salesContinueLineChartOptions(options) {
  const lineOptions = {
    ...options,
    chart: {
      ...options.chart,
      type: 'line'
    },
    stroke: {
      curve: 'straight'
    },
    fill: {
      type: 'none'
    }
  }

  return lineOptions
}

function salesContinueBarChartOptions(options) {
  const barOptions = {
    ...options,
    chart: {
      ...options.chart,
      type: 'bar'
    },
    stroke: {
      curve: 'straight'
    },
    fill: {
      type: 'none'
    }
  }

  return barOptions
}

// UTILS

function salesDaySum(transactions) {
  const dateTotals = {}
  for (let i = 0; i < transactions.length; i++) {
    const transaction = transactions[i]
    const date = transaction.transaction_date
    const total = transaction.total_paid

    if (!dateTotals[date]) {
      dateTotals[date] = total
    } else {
      dateTotals[date] += total
    }
  }

  const result = []
  for (const date in dateTotals) {
    result.push({ date: date, total: dateTotals[date] })
  }

  return result
}

function salesMonthSum(transactions) {
  const resultPerMonth = transactions.reduce((acc, cur) => {
    const date = new Date(cur.date)
    const key = date.toLocaleString('default', { month: 'long' })
    if (!acc[key]) {
      acc[key] = {
        year: date.getFullYear(),
        date: key,
        total: cur.total
      }
    } else {
      acc[key].total += cur.total
    }
    return acc
  }, {})

  return Object.values(resultPerMonth)
}

function checkLogarithmic(options) {
  const logarithmic = $('#srp-log-radio').is(':checked')
  if (logarithmic) {
    options = {
      ...options,
      yaxis: {
        ...options.yaxis,
        logarithmic: true,
        labels: {
          formatter: (value) => {
            return toRupiah(value)
          }
        }
      }
    }
  } else {
    options = {
      ...options,
      yaxis: {
        ...options.yaxis,
        logarithmic: false,
        labels: {
          formatter: (value) => {
            return toRupiah(value)
          }
        }
      }
    }
  }
  return options
}

function logarithmicRadio(chart, e) {
  if (e.target.checked) {
    chart.updateOptions({
      yaxis: {
        logarithmic: true,
        labels: {
          formatter: (value) => {
            return toRupiah(value)
          }
        }
      }
    })
  } else {
    chart.updateOptions({
      yaxis: {
        logarithmic: false,
        labels: {
          formatter: (value) => {
            return toRupiah(value)
          }
        }
      }
    })
  }
}

function toRupiah(number) {
  return (
    'Rp ' +
    number
      .toFixed(0)
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, '.')
  )
}

function filterMonth(transactions, month) {
  return transactions.filter((transaction) => {
    return transaction.date.split('-')[1] === '0' + month
  })
}

