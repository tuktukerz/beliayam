const createMap = async (result) => {
    const topology = await fetch(
        "https://code.highcharts.com/mapdata/countries/id/id-all.topo.json"
    ).then((response) => response.json());

    // Instantiate the map
    Highcharts.mapChart("map-container", {
        chart: {
            map: topology,
            spacingBottom: 20,
            // plotBackgroundImage: '../images/logo-transparent.png'
        },

        title: {
            text: undefined,
            
        },

        accessibility: {
            point: {
                valueDescriptionFormat: "{point.name}.",
            },
        },

        tooltip: {
            pointFormatter: function () {
               return `${this.name}: <b>${formatRupiah(this.value)}</b>`
            },
            style: {
                fontSize: '1.2rem'
            }
        },   

        legend: {
            enabled: false,
            labelFormatter: function () {
                return `${this.name} = <b>${formatRupiah(
                    this.data[0].value
                )}</b>`;
            },
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: "bottom",
            },
        },

        plotOptions: {
            map: {
                allAreas: false,
                joinBy: ["hc-key", "code"],
                dataLabels: {
                    crop: true,
                    format: "{y}",
                    inside: true,
                    y: -14,
                    style: {
                        color: "contrast",
                        textOutline: "none",
                    },
                    shape: "mapmarker",
                    borderColor: "black",
                    borderWidth: 1,
                    backgroundColor: "auto",
                },
            },
        },

        series: Object.entries(result).map(([key, value]) => {
            return {
                ...value,
                borderColor: 'black',
                borderWidth: 1,
                states: {
                    hover: {
                        borderWidth: 4
                    }
                },
            };
        }),
    });
};

function formatRupiah(number) {
    // Convert the number to a string and add commas as thousand separators
    let formattedNumber = number
        .toString()
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    // Add the Rupiah symbol
    formattedNumber = `Rp ${formattedNumber}`;

    return formattedNumber;
}
