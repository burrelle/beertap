import React, { Fragment } from 'react';
import TableHeader from './TableHeader';
import TableRow from './TableRow';
import axios from 'axios';

class BeerTable extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            beers: null,
            breweries: null,
            styles: null,
            glasses: null
        };
    }

    async getBeers() {
        const BASE_URL = 'http://beer-brewery.test/';
        const response = await axios.get(BASE_URL + 'beers');
        return response.data;
    }

    async getBreweries() {
        const BASE_URL = 'http://beer-brewery.test/';
        const response = await axios.get(BASE_URL + 'breweries');
        return response.data;
    }

    async getStyles() {
        const BASE_URL = 'http://beer-brewery.test/';
        const response = await axios.get(BASE_URL + 'styles');
        return response.data;
    }

    async getGlasses() {
        const BASE_URL = 'http://beer-brewery.test/';
        const response = await axios.get(BASE_URL + 'glasses');
        return response.data;
    }

    componentDidMount() {
        if (!this.state.beers) {
            (async () => {
                try {
                    this.setState({
                        beers: await this.getBeers(),
                        breweries: await this.getBreweries(),
                        styles: await this.getStyles(),
                        glasses: await this.getGlasses()
                    });
                } catch (e) {
                    console.log(e);
                }
            })();
        }
    }

    render() {
        return (
            <table className="w-full rounded shadow-lg mt-4 leading-normal text-left">
                <tbody>
                    <TableHeader />
                    {this.state.beers ? (
                        this.state.beers.map((item, i) => {
                            return (
                                <Fragment key={i}>
                                    <TableRow
                                        beer={item}
                                        style={this.state.styles[item.style_id].style}
                                        brewery={
                                            this.state.breweries[
                                                item.brewery_id
                                            ].name
                                        }
                                        city={this.state.breweries[item.brewery_id].city}
                                        state={this.state.breweries[item.brewery_id].state}
                                        glass={this.state.glasses[item.style_id].type}
                                        volume={item.volume}
                                    />
                                </Fragment>
                            );
                        })
                    ) : (
                        <tr>
                            <td>Loading...</td>
                        </tr>
                    )}
                </tbody>
            </table>
        );
    }
}

export default BeerTable;
