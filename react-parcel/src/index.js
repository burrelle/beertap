import React from 'react';
import { render } from 'react-dom';
import BeerTable from './components/BeerTable';

const App = () => {
    return (
        <div>
            <BeerTable />
        </div>
    );
};

render(<App />, document.getElementById('app'));
