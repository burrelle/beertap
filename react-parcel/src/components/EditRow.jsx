import React from 'react';

const EditRow = props => {
    if (!props.view) {
        return null;
      }
    return (
        <td>
            Edit me...
        </td>
    )
}

export default EditRow;
