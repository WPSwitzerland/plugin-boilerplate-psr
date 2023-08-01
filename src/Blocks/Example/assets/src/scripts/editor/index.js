import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
import { Disabled } from '@wordpress/components';
import { _x } from '@wordpress/i18n';
import ServerSideRender from '@wordpress/server-side-render';

import block_json from '../../../../block.json';
const { name: block_name } = block_json;

registerBlockType(block_name, {
	edit: () => {
		const blockProps = useBlockProps();

		return (
			<div {...blockProps}>
				<Disabled>
					<ServerSideRender block={block_name} />
				</Disabled>
			</div>
		);
	},
});
