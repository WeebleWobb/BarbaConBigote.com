import PropTypes from 'prop-types';
import clsx from 'clsx';
import { twMerge } from 'tailwind-merge'

const columnWidthMap = {
  xs: {
      1: 'flex-0 basis-1/12 max-w-[8.333333%]',
      2: 'flex-0 basis-2/12 max-w-[16.666666%]',
      3: 'flex-0 basis-3/12 max-w-[25%]',
      4: 'flex-0 basis-4/12 max-w-[33.333333%]',
      5: 'flex-0 basis-5/12 max-w-[41.666666%]',
      6: 'flex-0 basis-6/12 max-w-[50%]',
      7: 'flex-0 basis-7/12 max-w-[58.333333%]',
      8: 'flex-0 basis-8/12 max-w-[66.666666%]',
      9: 'flex-0 basis-9/12 max-w-[75%]',
      10: 'flex-0 basis-10/12 max-w-[83.333333%]',
      11: 'flex-0 basis-11/12 max-w-[91.666666%]',
      12: 'flex-0 basis-12/12 max-w-full',
  },
  sm: {
      1: 'sm:flex-0 sm:basis-1/12 sm:max-w-[8.333333%]',
      2: 'sm:flex-0 sm:basis-2/12 sm:max-w-[16.666666%]',
      3: 'sm:flex-0 sm:basis-3/12 sm:max-w-[25%]',
      4: 'sm:flex-0 sm:basis-4/12 sm:max-w-[33.333333%]',
      5: 'sm:flex-0 sm:basis-5/12 sm:max-w-[41.666666%]',
      6: 'sm:flex-0 sm:basis-6/12 sm:max-w-[50%]',
      7: 'sm:flex-0 sm:basis-7/12 sm:max-w-[58.333333%]',
      8: 'sm:flex-0 sm:basis-8/12 sm:max-w-[66.666666%]',
      9: 'sm:flex-0 sm:basis-9/12 sm:max-w-[75%]',
      10: 'sm:flex-0 sm:basis-10/12 sm:max-w-[83.333333%]',
      11: 'sm:flex-0 sm:basis-11/12 sm:max-w-[91.666666%]',
      12: 'sm:flex-0 sm:basis-12/12 sm:max-w-full',
  },
  md: {
      1: 'md:flex-0 md:basis-1/12 md:max-w-[8.333333%]',
      2: 'md:flex-0 md:basis-2/12 md:max-w-[16.666666%]',
      3: 'md:flex-0 md:basis-3/12 md:max-w-[25%]',
      4: 'md:flex-0 md:basis-4/12 md:max-w-[33.333333%]',
      5: 'md:flex-0 md:basis-5/12 md:max-w-[41.666666%]',
      6: 'md:flex-0 md:basis-6/12 md:max-w-[50%]',
      7: 'md:flex-0 md:basis-7/12 md:max-w-[58.333333%]',
      8: 'md:flex-0 md:basis-8/12 md:max-w-[66.666666%]',
      9: 'md:flex-0 md:basis-9/12 md:max-w-[75%]',
      10: 'md:flex-0 md:basis-10/12 md:max-w-[83.333333%]',
      11: 'md:flex-0 md:basis-11/12 md:max-w-[91.666666%]',
      12: 'md:flex-0 md:basis-12/12 md:max-w-full',
  },
  lg: {
      1: 'lg:flex-0 lg:basis-1/12 lg:max-w-[8.333333%]',
      2: 'lg:flex-0 lg:basis-2/12 lg:max-w-[16.666666%]',
      3: 'lg:flex-0 lg:basis-3/12 lg:max-w-[25%]',
      4: 'lg:flex-0 lg:basis-4/12 lg:max-w-[33.333333%]',
      5: 'lg:flex-0 lg:basis-5/12 lg:max-w-[41.666666%]',
      6: 'lg:flex-0 lg:basis-6/12 lg:max-w-[50%]',
      7: 'lg:flex-0 lg:basis-7/12 lg:max-w-[58.333333%]',
      8: 'lg:flex-0 lg:basis-8/12 lg:max-w-[66.666666%]',
      9: 'lg:flex-0 lg:basis-9/12 lg:max-w-[75%]',
      10: 'lg:flex-0 lg:basis-10/12 lg:max-w-[83.333333%]',
      11: 'lg:flex-0 lg:basis-11/12 lg:max-w-[91.666666%]',
      12: 'lg:flex-0 lg:basis-12/12 lg:max-w-full',
  },
  xl: {
      1: 'xl:flex-0 xl:basis-1/12 xl:max-w-[8.333333%]',
      2: 'xl:flex-0 xl:basis-2/12 xl:max-w-[16.666666%]',
      3: 'xl:flex-0 xl:basis-3/12 xl:max-w-[25%]',
      4: 'xl:flex-0 xl:basis-4/12 xl:max-w-[33.333333%]',
      5: 'xl:flex-0 xl:basis-5/12 xl:max-w-[41.666666%]',
      6: 'xl:flex-0 xl:basis-6/12 xl:max-w-[50%]',
      7: 'xl:flex-0 xl:basis-7/12 xl:max-w-[58.333333%]',
      8: 'xl:flex-0 xl:basis-8/12 xl:max-w-[66.666666%]',
      9: 'xl:flex-0 xl:basis-9/12 xl:max-w-[75%]',
      10: 'xl:flex-0 xl:basis-10/12 xl:max-w-[83.333333%]',
      11: 'xl:flex-0 xl:basis-11/12 xl:max-w-[91.666666%]',
      12: 'xl:flex-0 xl:basis-12/12 xl:max-w-full',
  },
};

const Column = ({ 
  children, 
  className, 
  xs = 12, 
  sm, 
  md,
  lg,
  xl,
 }) => {

  const classes = twMerge(
    clsx(
      'box-border flex-shrink-0 flex-grow basis-0',
      xs && columnWidthMap.xs[xs],
      sm && columnWidthMap.sm[sm],
      md && columnWidthMap.md[md],
      lg && columnWidthMap.lg[lg],
      xl && columnWidthMap.xl[xl],
    ), className
  );

  return (
    <>
      <div className={classes}>
        {children}
      </div>
    </>
  )
};

Column.propTypes = {
  /**
     * Additional CSS classes that can be passed via consumer.
     * Any Tailwind classes will be merged with and override the default classes.
     */
   className: PropTypes.string,

  /**
   * Number of grid-columns to take up in the XS breakpoint
   */
  xs: PropTypes.oneOf([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),

  /**
   * Number of grid-columns to take up in the SM breakpoint
   */
  sm: PropTypes.oneOf([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),

  /**
   * Number of grid-columns to take up in the MD breakpoint
   */
  md: PropTypes.oneOf([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),

  /**
   * Number of grid-columns to take up in the LG breakpoint
   */
  lg: PropTypes.oneOf([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),

  /**
   * Number of grid-columns to take up in the XL breakpoint
   */
  xl: PropTypes.oneOf([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),
}

export default Column;